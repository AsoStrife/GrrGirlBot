<?php 

class Message{

	public $messageID;
	public $chatID;
	public $firstName;
	public $lastName;
	public $username;
	public $date;
	public $text;

	function __construct($message) {
       $this->messageID 	= isset($message['message_id']) ? $message['message_id'] : "";
       $this->chatID 		= isset($message['chat']['id']) ? $message['chat']['id'] : "";
       $this->firstName 	= isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
       $this->lastName  	= isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
       $this->username 		= isset($message['chat']['username']) ? $message['chat']['username'] : "";
       $this->date 			= isset($message['date']) ? $message['date'] : "";
       $this->text 			= isset($message['text']) ? $message['text'] : "";
   }
}