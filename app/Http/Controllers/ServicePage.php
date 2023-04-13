<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ServicePage extends Controller
{
    public function index(Request $request)
    {
        $slug = $request->slug;
        $test = implode('-', array_map('ucfirst', explode('-', $slug)));
        $title = str_replace('-',' ',$test);
        $titleImg = 'assets/images/1.jpg';
        $image = null;

        if($slug == 'Organic-Dry-Cleaning')
        {
            return view('Pages.specialpage', compact('title', 'titleImg', 'image'));
        }
        else {
            $contentData = $this->fetchDataFromApi($slug);
            return view('Pages.service', compact('title', 'titleImg', 'image','contentData'));
        }
    }

    public function fetchDataFromApi($slug)
    {
        $baseUrl = env('APP_SERVER_API');
        $fetchUrl = "$baseUrl/api/v1/category/$slug";

        $client = new Client();
        $response = $client->get($fetchUrl);
        
        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
            // Do something with the data
            return $data['data']['services'];
        } else {
            abort($response->getStatusCode());
        }
    }
}
