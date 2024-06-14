<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profile extends Controller
{
    //
    public function index() {
        return view('profile');
    }

    public function detail() {
        $params = [
            'name'      => 'deden',
            'address'   => 'serang'
        ];
        return view('profile_detail', $params);
    }
}
