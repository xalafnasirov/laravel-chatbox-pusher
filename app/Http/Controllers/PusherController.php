<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index() {
        return view("chat");
    }

    public function broadcast(Request $request) { 
        return 'broadcast here';
    }

    public function recieve(Request $request) { 
        return 'recieve here';

    }
}
