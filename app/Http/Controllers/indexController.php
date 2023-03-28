<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriedesjeux;
use App\Models\jeu;

class indexController extends Controller
{
    public function index()
    {
        $jeux=jeu::all()->take(4);
        $categories=categoriedesjeux::all();
        return view('index',compact('jeux','categories'));
    }
}
