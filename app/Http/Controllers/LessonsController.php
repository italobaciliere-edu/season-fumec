<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request; // Esta é a classe que representa uma requisição HTTP no Laravel.
use App\Http\Controllers\varname;

class LessonsController extends Controller
{
    public function indexHtml(){
        return view('lessons.html');
    }
    
    public function indexJs(){
        return view('lessons.javaScript');
    }

    public function indexCss(){
        return view('lessons.css');
    }
}
