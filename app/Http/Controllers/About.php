<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //
    public function index() {
        $params = [
            'title' => 'About'
        ];
        return view('about', $params);
    }

}
