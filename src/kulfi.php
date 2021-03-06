<?php
namespace codeweird\Kulfi;

require_once __DIR__ . '/vendor/autoload.php';

use WSSC\WebSocketClient;
use \WSSC\Components\ClientConfig;



class Kulfi
{
	
	private $client;
	private $appName;
	
    public function connect($apiKey, $appname, $endPoint)
    {
		$this->client = new WebSocketClient($endPoint, new ClientConfig());
		$this->appName = $appname;
		
    }
	
	public function push($data, $channel){
		$arr = array( 
				"app" => $this->appName, 
				"message" => $data,
				"channel" => $channel
			);
			


		$this->client->send(json_encode($arr));
	
	}
	
	public function pull($channel){
		return $this->client->receive();
	}
}


?>
