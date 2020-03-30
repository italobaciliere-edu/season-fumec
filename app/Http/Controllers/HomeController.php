<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request; // Esta é a classe que representa uma requisição HTTP no Laravel.
use App\Http\Controllers\varname;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
}