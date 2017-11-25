<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfesorRequest;
use App\Models\Skola;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        $profesori = Profesor::with('skola')->get();
        //  dd($profesori->toArray());
        return view('profesori.index', [
            'profesori' => $profesori
        ]);
    }

    public function create()
    {
        $skole = Skola::all()->pluck('naziv_skole', 'id');

        return view('profesori.create', [
            'skole' => $skole
        ]);
    }

    public function store(ProfesorRequest $request)
    {
        $skola = Skola::where('id', '=', $request->skola)->first();
        if (!isset($skola)) {
            abort(404);
        }

        $profesor = new Profesor();
        $profesor->ime = $request->ime;
        $profesor->prezime = $request->prezime;
        $profesor->godiste = $request->godiste;
        $profesor->skola()->associate($skola);
        $profesor->save();

        return redirect()->route('profesor.index');
    }

    public function show($id)
    {
        $profesor = Profesor::where('id', '=', $id)->with('skola')->first();
        //dd($profesor->toArray());

        return view('profesori.show', [
            'profesor' => $profesor
        ]);
    }

    public function edit(Request $request, $id)
    {
        $skole = Skola::all()->pluck('naziv_skole', 'id');
        $profesor = Profesor::where('id', '=', $id)->first();
        //dd($profesor->toArray());

        return view('profesori.edit', [
            'profesor' => $profesor,
            'skole' => $skole
        ]);
    }

    public function update(Request $request, $id)
    {
        $skola = Skola::where('id', '=', $request->skola)->first();

        if (!isset($skola)) {
            abort(404);
        }

        $profesor = Profesor::where('id', '=', $id)->first();
        //dd($ucenik->toArray());
        $profesor->ime = $request->ime;
        $profesor->prezime = $request->prezime;
        $profesor->godiste = $request->godiste;
        $profesor->skola()->associate($skola);

        $profesor->save();

        return redirect()->route('profesor.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $profesor = Profesor::where('id', '=', $id)->first();

        $profesor->delete();


        return redirect()->route('profesor.index');
    }
}
