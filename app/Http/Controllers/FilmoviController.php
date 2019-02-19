<?php

namespace App\Http\Controllers;

use App\filmovi;
use Illuminate\Http\Request;

class FilmoviController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $filmovi = filmovi::orderBy('naslov',('asc'))->get();
    //dd($predmets);
//         echo '<ul>';
//         foreach ($predmets as $key => $p) {
//          echo '<li>'.$p->nazpred.'</li>';
//         }
//         echo '</ul>';
    return view('filmovi.index')->with('filmovi',$filmovi); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('filmovi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ($request->hasFile('slika')){
           $nazivslike = $request->slika->getClientOriginalName();
           $request->slika->storeas('upload',$nazivslike);
       };

      $f = new filmovi();
      $f->naslov = $request->input('naslov');
      $f->zanr = $request->input('zanr');
      $f->godina = $request->input('godina');
      $f->trajanje = $request->input('trajanje');
      $f->slika = $nazivslike;
      $f->save();
      
      return redirect()->route('filmovi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function show(filmovi $filmovi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function edit(filmovi $filmovi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, filmovi $filmovi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\filmovi  $filmovi
     * @return \Illuminate\Http\Response
     */
    public function destroy(filmovi $filmovi)
    {
        //
    }
    
    public function slovo($slovo) {
        dd($slovo);
    }
}
