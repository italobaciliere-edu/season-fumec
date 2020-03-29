<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request; // Esta é a classe que representa uma requisição HTTP no Laravel.
use App\Http\Controllers\varname;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
}