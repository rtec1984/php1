# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# Instantiate the client.
$mgClient = new Mailgun('MAILGUN_SECRET=865f0fd003d143f442e79425e7d03479-5e7fba0f-3076c150');
$domain = "sandbox2de67113d8b545c1b638e3a5f081fc77.mailgun.org";
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	'from'	=> 'Excited User <mailgun@sandbox2de67113d8b545c1b638e3a5f081fc77.mailgun.org>',
	'to'	=> 'Baz <rochab@gmail.com>',
	'subject' => 'Hello',
	'text'	=> 'Testing some Mailgun awesomness!'
));