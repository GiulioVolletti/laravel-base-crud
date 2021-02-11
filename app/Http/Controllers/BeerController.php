<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();
      // dd($beers);


      return view('beers-folder.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('beers-folder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $request->validate([
          'nome_birra' => 'required | max:30',
          'marca' => 'required | max:20',
          'prezzo' => 'required | numeric',
          'gradazione_alcolica' => 'required | numeric',
        ]);

        $beer = new Beer();
        $beer->nome_birra = $data['nome_birra'];
        $beer->marca = $data['marca'];
        $beer->prezzo = $data['prezzo'];
        $beer->gradazione_alcolica = $data['gradazione_alcolica'];
        $result = $beer->save();

        $lastAddBeer = Beer::orderBy('id', 'DESC')->first();
        return redirect()->route('beers.show', $lastAddBeer );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      // $beer = Beer::find($id);
      // $beer = Beer::findOrFail($id);
      // dd($beer);

      return view('beers-folder.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
