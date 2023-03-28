<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriedesjeux;

class contactController extends Controller
{
    public function contact()
    {
        $categories=categoriedesjeux::all();
        return view('contact',compact('categories'));
    }
}
