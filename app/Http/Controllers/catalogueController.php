<?php

namespace App\Http\Controllers;

use App\Models\categoriedesjeux;
use App\Models\jeu;
use Illuminate\Http\Request;

class catalogueController extends Controller
{
    public function catalogue()
    {
        $categories=categoriedesjeux::all();
        $jeux=jeu::all();
        return view('catalogue',compact('categories','jeux'));
    }
}
