<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    public function validation($data)
    {
        $validated = Validator::make($data, [
            "title" => "required|unique:comics",
            "price" => "required|numeric|min:0",
            "thumb" => "required",
            "type" => "required",
            "series" => "required",
            "sale_date" => "required|date"
        ])->validate();

        return $validated;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics", config("data"), compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create", config("data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validation($request->all());

        $comic = new Comic();
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->save();

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::find($id);
        return view("show", config("data"), compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::find($id);
        return view("edit", compact("comic"), config("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validation($request->all());

        // ddd($request->all());
        $comic = Comic::find($id);
        $comic->title = $request->title;
        $comic->description = $request->description;
        $comic->thumb = $request->thumb;
        $comic->price = $request->price;
        $comic->series = $request->series;
        $comic->sale_date = $request->sale_date;
        $comic->type = $request->type;
        $comic->update();
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::find($id);
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
