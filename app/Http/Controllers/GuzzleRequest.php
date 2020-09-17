<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuzzleRequest extends Controller
{
    public function getGuzzleRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://myexample.com');
        $response = $request->getBody();
    
        dd($response);
    }
    public function postGuzzleRequest()
{
    $client = new \GuzzleHttp\Client();
    $url = "http://myexample.com/api/posts";
   
    $myBody['name'] = "Demo";
    $request = $client->post($url,  ['body'=>$myBody]);
    $response = $request->send();
  
    dd($response);
}
public function putGuzzleRequest()
{
    $client = new \GuzzleHttp\Client();
    $url = "http://myexample.com/api/posts/1";
    $myBody['name'] = "Demo";
    $request = $client->put($url,  ['body'=>$myBody]);
    $response = $request->send();
   
    dd($response);
}
}
