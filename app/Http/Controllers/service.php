<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    public function index(){
    $params =[
        'title' => 'Service'
    ];
    return view('service',$params);
    }
}
