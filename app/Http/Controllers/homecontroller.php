<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class homecontroller extends Controller
{
    public function __invoke()
    {
       return view('home'); 
    }
}
