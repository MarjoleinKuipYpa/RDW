<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    private $rdw_url;
    private $client;

    public function __construct(Request $request)
    {
        $this->client = new Client();
        $this->rdw_url = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json';
    }

    public function GetLast10Cars(){
        
        try {
            $request = $this->client->request('GET', $this->rdw_url . '?voertuigsoort=Personenauto');
        } catch (\Throwable $th) {
            //throw $th;
        }
        
        $response = $request->getBody();
        $arr_body = json_decode($response);
        
        $lastTenItems = array_slice($arr_body, -10);

        return response()->json($lastTenItems);
       
    }

    public function showCarDetails($kenteken){
        
        try {
            $request = $this->client->request('GET', $this->rdw_url . '?kenteken=' . $kenteken);
        } catch (\Throwable $th) {
            //throw $th;
        }

        $response = $request->getBody();
        $car_info = json_decode($response);

        return response()->json($car_info);
    }
}
