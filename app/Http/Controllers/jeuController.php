<?php

namespace App\Http\Controllers;

use App\Models\categoriedesjeux;
use App\Models\jeu;
use Illuminate\Http\Request;

class jeuController extends Controller
{
    public function show($id)
    {   
        $jeux=jeu::all();
        $categories=categoriedesjeux::all();
        $jeu=jeu::where('id',$id)->first();
        $cat=categoriedesjeux::where('id',$jeu->categoriedesjeux_id);
        return view('jeu',compact('jeu','categories','cat','jeux'));
    }
}
