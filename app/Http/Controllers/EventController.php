<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{

    public function index()
    {

        $search = request('search');

        if ($search) {

            $events = Event::where([
                ['partida', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {

        $event = new Event;

        $event->partida = $request->partida;
        $event->date = $request->date;
        $event->participantes = $request->participantes;
        $event->tempo = $request->tempo;
        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Resultado cadastrado com sucesso!');
    }

    public function show($id)
    {

        $event = Event::findOrFail($id);

        $user = auth()->user();
        $hasUserJoined = false;

        if ($user) {

            $userEvents = $user->eventsAsParticipant->toArray();

            foreach ($userEvents as $userEvent) {
                if ($userEvent['id'] == $id) {
                    $hasUserJoined = true;
                }
            }
        }

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner, 'hasUserJoined' => $hasUserJoined]);
    }

    public function dashboard()
    {

        $user = auth()->user();

        $events = $user->events;

        $eventsAsParticipant = $user->eventsAsParticipant;

        return view(
            'events.dashboard',
            ['events' => $events, 'eventsasparticipant' => $eventsAsParticipant]
        );
    }

    public function destroy($id)
    {

        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Resultado excluído com sucesso!');
    }

    public function edit($id)
    {

        $user = auth()->user();

        $event = Event::findOrFail($id);

        if ($user->id != $event->user_id) {
            return redirect('/dashboard');
        }

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request)
    {

        $data = $request->all();

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/events'), $imageName, 's3');

            $data['image'] = $imageName;
        }

        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Resultado editado com sucesso!');
    }

    public function joinEvent($id)
    {

        $user = auth()->user();

        $user->eventsAsParticipant()->attach($id);

        $event = Event::findOrFail($id);

        return redirect('/dashboard')->with('msg', 'Sua presença está confirmada no resultado da ' . $event->partida);
    }
}
