<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function getGuzzleRequest()
{
    $client = new \GuzzleHttp\Client();
    $request = $client->get('https://opendata.rdw.nl/resource/m9d7-ebf2.json');
    $response = $request->getBody();
   
    dd($response);
}
public function getGuzzleRequestPersonenAuto()
{
    $client = new Client();
    $request = $client->get('https://opendata.rdw.nl/resource/m9d7-ebf2.json?voertuigsoort=Personenauto');
    $response = $request->getBody();
   
    dd($response);
}
    public function last10PersonAuto(){
        $client = new Client();
        $request = $client->request('GET', 'https://opendata.rdw.nl/resource/m9d7-ebf2.json?voertuigsoort=Personenauto');
        $response = $request->getBody();
        $arr_body = json_decode($response);
        $lastTenItems = array_slice($arr_body, -10);
        return json_encode($lastTenItems);
    }
    public function show($kenteken){
        $client = new Client();
        $request = $client->request('GET', 'https://opendata.rdw.nl/resource/m9d7-ebf2.json?kenteken='. $kenteken);
        $response = $request->getBody();
        $arr_body = json_decode($response);
        return json_encode($arr_body);
    }
}
