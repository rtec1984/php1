<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:locale" content="pt_BR" />

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>


        <!-- Icone da aplicação -->
        <link rel="shortcut icon" href="https://cdn.awsli.com.br/255/255552/favicon/08a8ba02df.jpg" />
        <link rel="icon" href="https://cdn.awsli.com.br/255/255552/favicon/08a8ba02df.jpg" sizes="192x192">

    </head>
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
              <img src="https://cdn.awsli.com.br/255/255552/logo/7ac966010f.jpg" alt="RTEC">
            </a>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="/" class="nav-link">EVENTOS</a>
              </li>
              <li class="nav-item">
                <a href="/events/create" class="nav-link">CRIAR EVENTOS</a>
              </li>
              @auth
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">MEUS EVENTOS</a>
              </li>
              <li class="nav-item">
                <form action="/logout" method="POST">
                  @csrf
                  <a href="/logout" 
                    class="nav-link" 
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                  </a>
                </form>
              </li>
              @endauth
              @guest
              <li class="nav-item">
                <a href="/login" class="nav-link">ENTRAR</a>
              </li>
              <li class="nav-item">
                <a href="/register" class="nav-link">CADASTRAR</a>
              </li>
              @endguest
            </ul>
          </div>
        </nav>
      </header>
      <main>
        <div class="container-fluid">
          <div class="row">
            @if(session('msg'))
              <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
          </div>
        </div>
      </main>
      <footer>
        <p><img class="footer-image" src="https://cdn.awsli.com.br/255/255552/logo/7ac966010f.jpg" alt="RTEC"> &copy; 2017-<?php echo date('Y'); ?></p>
      </footer>
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    </body>
</html>
