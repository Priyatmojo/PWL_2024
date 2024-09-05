<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting () {
        return view('blog.hello')
        ->with('name','Priyatmojo')
        ->with('occupation', 'Astrounaut');
    }
}