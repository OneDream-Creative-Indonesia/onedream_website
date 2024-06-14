<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    
    public function index() {
        $params = [
            'title' => 'Home'
        ];
        return view('home', $params);
    }


}
?>