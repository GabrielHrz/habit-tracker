<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $name = "Gabriel";
        $habits = ["Estudiar","Programar","Correr"];
        return view('home', compact('name','habits'));
    }
}
