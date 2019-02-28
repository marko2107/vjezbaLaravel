<?php

namespace App\Http\Controllers;

use App\Dvorana;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use function view;

class DvoranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dvorane= Dvorana::all();
        //dd($dvorane);
        return view('dvorana.index', ['mucionice'=>$dvorane]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dvorana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validator = Validator::make($request->all(), [
        "naziv" => 'string|max:5',
        "naziv" => 'alpha',
        "broj" => 'numeric'
    ]);
    if ($validator->fails()) {
      Session::flash('error', 'Greška');
      return redirect('dvorana/create')
          ->withErrors($validator)
          ->withInput();
    } else {

      
      $d = new Dvorana();
      $d->naziv = $request->input('naziv');
      $d->broj = $request->input('broj');
      $d->save();
      // redirect
      Session::flash('message', 'Uspješno dodana dvorana!');
      //return Redirect::to('mobitels');
      return view('dvorana/index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function show(Dvorana $dvorana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function edit(Dvorana $dvorana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dvorana $dvorana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dvorana  $dvorana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dvorana $dvorana)
    {
        //
    }
}
