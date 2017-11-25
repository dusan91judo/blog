@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id ucenika:</p>
                    <p>{{ $ucenik->id }}</p>
                </div>
                <div>
                    <p>Ime ucenika:</p>
                    <p>{{ $ucenik->ime }}</p>
                </div>
                <div>
                    <p>Prezime ucenika:</p>
                    <p>{{ $ucenik->prezime }}</p>
                </div>
                <div>
                    <p>Godiste ucenika:</p>
                    <p>{{ $ucenik->godiste }}</p>
                </div>
                <div>
                    <p>Skola ucenika:</p>
                    <p>{{ $ucenik->skola->naziv_skole }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection