<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicePage extends Controller
{
    public function index(Request $request)
    {
        $slug = $request->slug;
        $test = implode('-', array_map('ucfirst', explode('-', $slug)));
        $title = str_replace('-',' ',$test);
        $titleImg = 'assets/images/1.jpg';
        $image = null;

        if($slug == 'wash,-dry,-and-fold')
        {
            $titleImg = 'assets/images/3.jpg';
            $image = 'assets/images/wash_basket.jpg';
        }
        
        return view('Pages.service', compact('title', 'titleImg', 'image'));
    }
}
