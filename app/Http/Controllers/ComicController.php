<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //prendo i dati dalla form
        $date = $request->all();

        //validazione
        $request ->validate([
            "title" => "required|string|max:80|unique:comics",
            "description" => "nullable|string",
            "image" => "required|url",
            "price" => "required|numeric|between:10,9999",
            "series" => "required|string|max:80",
            "sale_date" => "required|date_format:Y-m-d",
            "type" => "nullable|string|max:80",
        ]);

        //inserisco un nuovo record nella tabella
        $newComic = new Comic();
        $newComic->title = $date["title"];
        $newComic->image = $date["image"];
        $newComic->price = $date["price"];
        $newComic->series = $date["series"];
        $newComic->sale_date = $date["sale_date"];

        if( !empty($date["description"])){
            $newComic->description = $date["description"];
        }

        if( !empty($date["type"])){
            $newComic->type = $date["type"];
        }

        $newComic->save();
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //SELECT * FROM comics WHERE id == $id
        // $comic = Comic::find($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $date = $request->all();

        $comic->title = $date["title"];
        $comic->image = $date["image"];
        $comic->price = $date["price"];
        $comic->series = $date["series"];
        $comic->sale_date = $date["sale_date"];

        if( !empty($date["description"])){
           $comic->description = $date["description"];
        }

        if( !empty($date["type"])){
           $comic->type = $date["type"];
        }

       $comic->save();

        return redirect()->route('comics.show',$comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
