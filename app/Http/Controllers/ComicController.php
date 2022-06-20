<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicRequest;
use Illuminate\Http\Request;

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
        //dd($comics);
        return view('comics.index', compact('comics'));
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
     * @param  \Illuminate\Http\Request\ComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        //dd($request);
        //dd($request->all());

        // metodo create
        // $data = $request->all();

        // validazione
        // $validated_data = $request->validate([
        //     "title" => "required",
        //     "description" => "nullable",
        //     "thumb" => "required",
        //     "price" => "required",
        //     "series" => "nullable",
        //     "sale_date" => "nullable",
        //     "type" => "nullable|max:50"
        // ]);

        $validated_data = $request->validated();

        Comic::create($validated_data);

        // per non permettergli di aggiungere il recond ad ogni refresh
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //dd($comic);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\ComicRequest  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        //dd($request->all());
         //$data = $request->all();
        
        // $validated_data = $request->validate([
        //     "title" => "required",
        //     "description" => "nullable",
        //     "thumb" => "required",
        //     "price" => "required",
        //     "series" => "nullable",
        //     "sale_date" => "nullable",
        //     "type" => "nullable|max:50"
        // ]);
        // modifica Request con ComicRequest dopo aver creato e esportato le regole in ComicRequest
        // modifica importa la richiesta riga #6

        $validated_data = $request->validated();
        $comic->update($validated_data);
        return redirect()->route('comics.show',compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
