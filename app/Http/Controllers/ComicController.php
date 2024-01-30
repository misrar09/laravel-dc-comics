<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comic_books = Comic::all();
        return view('comics.index', compact('comic_books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([

            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'type' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'sale_date' => 'required|date',
        ]);

        $newComicData = $request->all();
        $new_comic = new Comic();
        $new_comic->thumb = $newComicData['thumb'];
        $new_comic->price = $newComicData['price'];
        $new_comic->series = $newComicData['series'];
        $new_comic->type = $newComicData['type'];
        $new_comic->title = $newComicData['title'];
        $new_comic->description = $newComicData['description'];
        $new_comic->sale_date = $newComicData['sale_date'];
        $new_comic->save();

        return redirect()->route('comic.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Comic::findOrFail($id);
        return view('comics.show', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Comic::findOrFail($id);
        return view('comics.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string',
            'type' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'sale_date' => 'required|date',
        ]);


        $newComicData = $request->all();

        $existing_comic = Comic::findOrFail($id);

        $existing_comic->thumb = $newComicData['thumb'];
        $existing_comic->price = $newComicData['price'];
        $existing_comic->series = $newComicData['series'];
        $existing_comic->type = $newComicData['type'];
        $existing_comic->title = $newComicData['title'];
        $existing_comic->description = $newComicData['description'];
        $existing_comic->sale_date = $newComicData['sale_date'];
        $existing_comic->update();

        return redirect()->route('comic.show', $existing_comic->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteComic = Comic::findOrFail($id);
        $deleteComic->delete();

        return redirect()->route('comic.index');
    }
}
