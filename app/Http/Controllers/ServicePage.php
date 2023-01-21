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
        return view('Pages.service', compact('title'));
    }
}
