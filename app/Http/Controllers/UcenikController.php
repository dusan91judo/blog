<?php

namespace App\Http\Controllers;

use App\Models\Ucenik;
use Illuminate\Http\Request;

class UcenikController extends Controller
{
    public function index()
    {
        $ucenici = Ucenik::all();
        dd($ucenici->toArray());
    }

    public function create()
    {
        return view('ucenici.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());

        $ucenik = new Ucenik();
        $ucenik->ime = $request->ime;
        $ucenik->prezime = $request->prezime;
        $ucenik->godiste = $request->godiste;
        $ucenik->save();

        return redirect()->route('ucenik.index');
    }
}
