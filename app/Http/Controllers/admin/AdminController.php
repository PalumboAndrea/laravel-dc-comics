<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all(); 
        return view('admin.index', [ 'comics' => $comics ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create', [ 'comic' => new Comic() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // to validate the datas
        $comic = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'sale_date'=>'required',
            'type'=>'required',
        ],
        [
            'title.required' => 'Per favore inserire un titolo',
            'description.required' => 'Per favore inserire una descrizione',
            'thumb.required' => 'Per favore inserire un link ad una foto',
            'price.required' => 'Per favore inserire un prezzo',
            'series.required' => 'Per favore inserire un nome di una serie di fumetti',
            'sale_date.required' => 'Per favore inserire una data di uscita',
            'type.required' => 'Per favore inserire un tipo',
        ]);


        $newComic = new Comic();
        $newComic->fill($comic);
        $newComic->save();

        return redirect()->route('admin.comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) // dependency injection --> DA UN ID COME INPUT DAMMI IL COMIC E FAI IN AUTOMATICO LA FIND OR FAIL
    {
        $comic = Comic::findOrFail($id);
        return view('admin.show', [ 'comic' => $comic ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.edit', [ 'comic' => $comic ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $comic = Comic::findOrFail($id);

        $formData = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'thumb'=>'required',
            'price'=>'required',
            'series'=>'required',
            'sale_date'=>'required',
            'type'=>'required',
        ],
        [
            'title.required' => 'Per favore inserire un titolo',
            'description.required' => 'Per favore inserire una descrizione',
            'thumb.required' => 'Per favore inserire un link ad una foto',
            'price.required' => 'Per favore inserire un prezzo',
            'series.required' => 'Per favore inserire un nome di una serie di fumetti',
            'sale_date.required' => 'Per favore inserire una data di uscita',
            'type.required' => 'Per favore inserire un tipo',
        ]);

        $comic->update($formData);

        return redirect()->route('admin.comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}