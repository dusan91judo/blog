<?php

namespace App\Http\Controllers;

use App\Models\Dogadjaj;
use App\Models\Skola;
use Illuminate\Http\Request;

class DogadjajController extends Controller
{
    public function index()
    {
        $dogadjaji = Dogadjaj::get();
        return view('dogadjaji.index', [
            'dogadjaji' => $dogadjaji
        ]);
    }

    public function create()
    {
        $dogadjaj = Dogadjaj::all()->pluck('naziv', 'id');

        return view('dogadjaji.create', [
        'dogadjaj' => $dogadjaj
        ]);
    }

    public function store(Request $request)
    {
        $dogadjaj = new Dogadjaj();
        $dogadjaj->naziv = $request->naziv;
        $dogadjaj->tekst = $request->tekst;
        //$dogadjaj->skola()->associate($skola);
        $dogadjaj->save();

        return redirect()->route('dogadjaj.index');
    }

    public function show($id)
    {
        $dogadjaj = Dogadjaj::where('id', '=', $id)->first();

        return view('dogadjaji.show', [
            'dogadjaj' => $dogadjaj
        ]);
    }

    public function edit($id)
    {
        $dogadjaj = Dogadjaj::where('id', '=', $id)->first();

        return view('dogadjaji.edit', [
            'dogadjaj' => $dogadjaj,
        ]);
    }

    public function update(Request $request, $id)
    {
        $dogadjaj = Dogadjaj::where('id', '=', $id)->first();
        $dogadjaj->naziv = $request->naziv;
        $dogadjaj->tekst = $request->tekst;
       // $dogadjaj->skola()->associate($skola);

        $dogadjaj->save();

        return redirect()->route('dogadjaj.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        $dogadjaj = Dogadjaj::where('id', '=', $id)->first();

        $dogadjaj->delete();


        return redirect()->route('dogadjaj.index');
    }

}
