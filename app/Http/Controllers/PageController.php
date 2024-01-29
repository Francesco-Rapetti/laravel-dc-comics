<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $dati = config("data");
        return view("home", config("data"), compact("comics"));
    }

    // public function comics()
    // {
    //     $dati = config("data");
    //     $comics = Comic::all();
    //     return view("comics", config("data"), compact("comics"));
    // }
}
