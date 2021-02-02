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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function edit(Osoba $osoba)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Osoba  $osoba
     * @return \Illuminate\Http\Response
     */
    public function destroy($osoba)
    {
        Osoba::find($osoba)->delete();
    }
}