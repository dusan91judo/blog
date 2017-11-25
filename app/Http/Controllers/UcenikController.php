<?php

namespace App\Http\Controllers;

use App\Http\Requests\UcenikRequest;
use App\Models\Skola;
use App\Models\Ucenik;
use Illuminate\Http\Request;

class UcenikController extends Controller
{
    public function index()
    {
        $ucenici = Ucenik::with('skola')->get();
        //  dd($ucenici->toArray());
        return view('ucenici.index', [
            'ucenici' => $ucenici
        ]);
    }

    public function create()
    {
        $skole = Skola::all()->pluck('naziv_skole', 'id');

        return view('ucenici.create', [
            'skole' => $skole
        ]);
    }

    public function store(UcenikRequest $request)
    {
        $skola = Skola::where('id', '=', $request->skola)->first();

        if (!isset($skola)) {
            abort(404);
        }

        $ucenik = new Ucenik();
        $ucenik->ime = $request->ime;
        $ucenik->prezime = $request->prezime;
        $ucenik->godiste = $request->godiste;
        $ucenik->skola()->associate($skola);
        $ucenik->save();

        return redirect()->route('ucenik.index');
    }

    public function show($id)
    {
        $ucenik = Ucenik::where('id', '=', $id)->with('skola')->first();
        //dd($ucenik->toArray());

        return view('ucenici.show', [
            'ucenik' => $ucenik
        ]);
    }

    public function edit(Request $request, $id)
    {
        $skole = Skola::all()->pluck('naziv_skole', 'id');
        $ucenik = Ucenik::where('id', '=', $id)->first();
        //dd($ucenik->toArray());

        return view('ucenici.edit', [
            'ucenik' => $ucenik,
            'skole' => $skole
        ]);
    }

    public function update(Request $request, $id)
    {
        $skola = Skola::where('id', '=', $request->skola)->first();

        if (!isset($skola)) {
            abort(404);
        }

        $ucenik = Ucenik::where('id', '=', $id)->first();
        //dd($ucenik->toArray());
        $ucenik->ime = $request->ime;
        $ucenik->prezime = $request->prezime;
        $ucenik->godiste = $request->godiste;
        $ucenik->skola()->associate($skola);

        $ucenik->save();

        return redirect()->route('ucenik.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $ucenik = Ucenik::where('id', '=', $id)->first();

        $ucenik->delete();


        return redirect()->route('ucenik.index');
    }
}
