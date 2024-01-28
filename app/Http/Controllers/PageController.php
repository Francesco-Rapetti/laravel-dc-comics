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

    public function comics()
    {
        $comic = Comic::all();
        $dati = config("data");
        return view("comics", config("data"), compact("comic"));
    }
}
