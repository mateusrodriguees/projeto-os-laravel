<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    public function welcome(){
        return view('sistema.welcome');
    }
    public function sobre(){
        return view('sistema.sobre');
    }
    public function servicos(){
        return view('sistema.servicos');
    }
}
