<?php

namespace App\Http\Controllers;
use App\Models\Napomena;
use App\Http\Requests\SkolaRequest;
use App\Models\Skola;
use Illuminate\Http\Request;

class SkolaController extends Controller
{
    public function index()
    {
        $skole = Skola::all();

        return view('skole.index', [
            'skole' => $skole
        ]);
    }

    public function create()
    {
        return view('skole.create');
    }

    public function store(SkolaRequest $request)
    {
        $skola = new Skola();
        $skola->naziv_skole = $request->naziv_skole;
        $skola->ulica = $request->ulica;
        $skola->broj = $request->broj;
        $skola->save();

        return redirect()->route('skola.index');
    }

    public function show($id)
{

    //$napomena = Napomena::where('id', '=', $id)->with('skola')->first();
    $skola = Skola::where('id', '=', $id)->with('napomene')->first();

    return view('skole.show', [
        'skola' => $skola,
    ]);
}

    public function edit(Request $request, $id)
    {
        $skola = Skola::where('id', '=', $id)->with('napomene')->first();
        //dd($ucenik->toArray());

        return view('skole.edit', [
            'skola' => $skola
        ]);
    }

    public function update(Request $request, $id)
    {
        $skola = Skola::where('id', '=', $id)->with('napomene')->first();
        //dd($ucenik->toArray());
        $skola->naziv_skole = $request->naziv_skole;
        $skola->ulica = $request->ulica;
        $skola->broj = $request->broj;
        $skola->napomena = $request->napomena;

        $skola->save();

        return redirect()->route('skola.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $skola = Skola::where('id', '=', $id)->with('napomene')->first();

        $skola->delete();


        return redirect()->route('skola.index');
    }
}
