<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceDetail extends Controller
{
    public function video(){
        return view('service.video');
    }
    public function foto(){
        return view('service.foto');
    }
    public function desain(){
        return view('service.desain');
    }
}
