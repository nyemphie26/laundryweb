<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class HomeController extends Controller
{
    public function index()
    {
        $services = $this->fetchDataFromApi();
        return view('homepage', compact('services'));
    }

    public function fetchDataFromApi()
    {
        $baseUrl = env('APP_SERVER_API');
        $fetchUrl = "$baseUrl/api/v1/services";

        $client = new Client();
        $response = $client->get($fetchUrl);
        
        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
            // Do something with the data
            return $data['data'];
        } else {
            abort($response->getStatusCode());
        }
    }
}
