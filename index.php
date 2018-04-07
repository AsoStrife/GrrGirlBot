<?php 

/**
 * @author Andrea Corriga
 */

require_once('config/config.php');
require_once('libraries/Request.php');
require_once('libraries/Message.php');
require_once('libraries/Logs.php');


error_reporting(E_ALL);
ini_set('display_errors', 1);

$input = json_decode(file_get_contents('php://input'), true);

$message = new Message($input['message']);
$chat = $input['chat'];
$request = new Request($config);


$general = array(
		"Ok",
		"No",
		"No.",
		".",
		"Mh",
		"Mh mh",
		"Mmm",
		"\u{1F60A}",
		"\u{1F937}\u{200D}\u{2640}\u{FE0F}",
		"\u{1F595}"
	);


if(!$input){
	header("location: https://t.me/grrGirlBot");
  exit;
}

$text = strtolower($message->text);

if($text == "/info" || $text == "/start")
	$request->send($message->chatID, "Sono GrrGirlBot, un bot meno acido di Francesca Secci.\nSono stata creata dal mio BFF paxino e narcisista @AsoStrife. \nMh mh.");
else{
	$emoticons =  "\u{1F30F}";
	$random =  $general[array_rand($general)];
	$request->send($message->chatID, $random);
}
