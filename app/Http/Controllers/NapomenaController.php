<?php

namespace App\Http\Controllers;

use App\Models\Napomena;
use App\Models\Skola;
use Illuminate\Http\Request;

class NapomenaController extends Controller
{
    public function create($skolaId)
    {
        $skola = Skola::where('id', '=', $skolaId)->first();

        if (!isset($skola)) {
            abort(404);
        }

        return view('napomene.create', [
            'skola' => $skola
        ]);
    }

    public function store(Request $request, $skolaId)
    {
        $skola = Skola::where('id', '=', $skolaId)->first();

        if (!isset($skola)) {
            abort(404);
        }

        $napomena1 = new Napomena();
        $napomena1->naziv = $request->naziv1;
        $napomena1->tekst = $request->tekst1;

        $napomena2 = new Napomena();
        $napomena2->naziv = $request->naziv2;
        $napomena2->tekst = $request->tekst2;

        $napomena3 = new Napomena();
        $napomena3->naziv = $request->naziv3;
        $napomena3->tekst = $request->tekst3;

        $skola->napomene()->saveMany([
            $napomena1,
            $napomena2,
            $napomena3
        ]);

        return redirect()->route('skola.show', [$skolaId]);
    }

    public function show($id)
    {
        $napomena = Napomena::where('id', '=', $id)->with('skola')->first();
        //dd($profesor->toArray());

        return view('napomene.show', [
            'profesor' => $napomena
        ]);
    }

    public function edit(Request $request, $skola_id)
    {
        $napomene = Napomena::where('skola_id', '=', $skola_id)->get();
        //dd($napomene->toArray());//dd($ucenik->toArray());

        return view('napomene.edit', [
            'napomene' => $napomene,
            'skola_id' => $skola_id
        ]);
    }

}
