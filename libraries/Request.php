<?php
require_once('vendor/autoload.php');
require_once('vendor/pear/http_request2/HTTP/Request2.php');

class Request{

	private $config; 

	public function __construct($config){
		$this->config = $config; 
	}

	public function send($chatID, $text = '', $method = 'sendMessage') {

		if($chatID == null)
			return null; 

	    $url = $this->config['apiUrl'] . $method;

		try {

			$request = new HTTP_Request2($url);
			$request->setMethod(HTTP_Request2::METHOD_POST)
				->addPostParameter(array(
											'chat_id' 		=> $chatID,
											'text' 			=> $text,
										)); 
			$response = $request->send()->getBody();
			return $response; 
		} 
		catch (Exception $exc) {
			return $exc->getMessage();
		}
	}	

}