<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursTekstopisac;
use App\Models\Tekstopisac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tp = Tekstopisac::all();
        return ResursTekstopisac::collection($tp);
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
     * @param  \App\Models\Tekstopisac  $tekstopisac
     * @return \Illuminate\Http\Response
     */
    public function show(Tekstopisac $tekstopisac)
    {
        return new ResursTekstopisac($tekstopisac);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tekstopisac  $tekstopisac
     * @return \Illuminate\Http\Response
     */
    public function edit(Tekstopisac $tekstopisac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tekstopisac  $tekstopisac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tekstopisac $tekstopisac)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'prezime' => 'required|string',
            'broj_pesama' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška', $validator->errors()]);
        }

        $tekstopisac->ime = $request->ime;
        $tekstopisac->prezime = $request->prezime;
        $tekstopisac->broj_pesama = $request->broj_pesama;

        $tekstopisac->save();

        return response()->json(['Izmenjen tekstopisac!', new ResursTekstopisac($tekstopisac)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tekstopisac  $tekstopisac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tekstopisac $tekstopisac)
    {
        $tekstopisac->delete();
        return response()->json(['Obrisan tekstopisac!', new ResursTekstopisac($tekstopisac)]);
    }
}
