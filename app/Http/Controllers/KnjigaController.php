<?php

namespace App\Http\Controllers;

use App\Biblioteka;
use App\Http\Requests\KnjigaRequest;
use App\Knjiga;
use Illuminate\Http\Request;

class KnjigaController extends Controller
{
    public function index()
    {
        $knjige = Knjiga::with('biblioteka')->get();
        return view('knjige.index', [
            'knjige' => $knjige
        ]);
    }

    public function create()
    {
        $biblioteke = Biblioteka::all()->pluck('naziv', 'id');

        return view('knjige.create', [
            'biblioteke' => $biblioteke
        ]);
    }

    public function store(KnjigaRequest $request)
    {
        //dd($request->all());
        $biblioteka = Biblioteka::where('id', '=', $request->biblioteka)->first();

        if (!isset($biblioteka)) {
            abort(404);
        }

        $knjiga = new Knjiga();
        $knjiga->naziv = $request->naziv;
        $knjiga->autor = $request->autor;
        $knjiga->broj_strana = $request->broj_strana;
        $knjiga->biblioteka()->associate($biblioteka);
        $knjiga->save();

        return redirect()->route('knjiga.index');
    }

    public function show($id)
    {
        $knjiga = Knjiga::where('id', '=', $id)->with('biblioteka')->first();

        return view('knjige.show', [
            'knjiga' => $knjiga
        ]);
    }

    public function edit(Request $request, $id)
    {
        $biblioteke = Biblioteka::all()->pluck('naziv', 'id');
        $knjiga = Knjiga::where('id', '=', $id)->first();

        return view('knjige.edit', [
            'knjiga' => $knjiga,
            'biblioteke' => $biblioteke
        ]);
    }

    public function update(Request $request, $id)
    {
        $biblioteka = Biblioteka::where('id', '=', $request->biblioteka)->first();

        if (!isset($biblioteka)) {
            abort(404);
        }

        $knjiga = Knjiga::where('id', '=', $id)->first();
        $knjiga->naziv = $request->naziv;
        $knjiga->autor = $request->autor;
        $knjiga->broj_strana = $request->broj_strana;
        $knjiga->biblioteka()->associate($biblioteka);

        $knjiga->save();

        return redirect()->route('knjiga.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $knjiga = Knjiga::where('id', '=', $id)->first();

        $knjiga->delete();


        return redirect()->route('knjiga.index');
    }
}
