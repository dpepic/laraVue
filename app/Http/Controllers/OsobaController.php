<?php

namespace App\Http\Controllers;

use App\Models\Osoba;
use Illuminate\Http\Request;

class OsobaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Osoba::all()->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $osoba = new Osoba(['Ime' => $request->input('Ime'), 'Prezime' => $request->input('Prezime') ]);
        $osoba->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function show(Osoba $osoba)
    {
        //
    }

    public function edit(Osoba $osoba)
    {
        return response()->json($osoba);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Osoba $osoba)
    {
        $osoba->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function destroy(Osoba $osoba)
    {
        $osoba->delete();
    }
}
