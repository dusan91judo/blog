<?php

namespace App\Http\Controllers;

use App\Biblioteka;
use App\Http\Requests\BibliotekaRequest;
use Illuminate\Http\Request;

class BibliotekaController extends Controller
{
    public function index()
    {
        $biblioteke = Biblioteka::with('knjiga')->get();
        //  dd($biblioteke->toArray());
        return view('biblioteke.index', [
            'biblioteke' => $biblioteke
        ]);
    }

    public function create()
    {
        return view('biblioteke.create');
    }

    public function store(BibliotekaRequest $request)
    {
        $biblioteka = new Biblioteka();
        $biblioteka->naziv = $request->naziv;
        $biblioteka->ulica = $request->ulica;
        $biblioteka->save();

        return redirect()->route('biblioteka.index');
    }

    public function show($id)
    {
        $biblioteka = Biblioteka::where('id', '=', $id)->with('knjige')->first();

        return view('biblioteke.show', [
            'biblioteka' => $biblioteka,
        ]);
    }

    public function edit(Request $request, $id)
    {
        $biblioteka = Biblioteka::where('id', '=', $id)->with('knjige')->first();

        return view('biblioteke.edit', [
            'biblioteka' => $biblioteka
        ]);
    }

    public function update(Request $request, $id)
    {
        $biblioteka = Biblioteka::where('id', '=', $id)->with('knjige')->first();
        //dd($ucenik->toArray());
        $biblioteka->naziv = $request->naziv;
        $biblioteka->ulica = $request->ulica;
        $biblioteka->knjiga = $request->knjiga;

        $biblioteka->save();

        return redirect()->route('biblioteka.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $biblioteka = Biblioteka::where('id', '=', $id)->with('knjige')->first();

        $biblioteka->delete();


        return redirect()->route('biblioteka.index');
    }
}
