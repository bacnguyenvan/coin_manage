<?php

namespace App\Http\Controllers\APIs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function getMarket()
    {
    	$url = "https://vicuta.com/api/getMarket";
    	$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n")); 
		//Basically adding headers to the request
		$context = stream_context_create($opts);
		$html = file_get_contents($url,true,$context);
		// $html = htmlspecialchars($html);
        
    	return json_decode($html);
    }
}
