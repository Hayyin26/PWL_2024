<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function hello(){
        return 'hello world' ;
    }

    public function greeting(){ 
        return view('blog.hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut'); 
        } 
}
