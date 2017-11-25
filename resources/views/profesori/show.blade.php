@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id profesora:</p>
                    <p>{{ $profesor->id }}</p>
                </div>
                <div>
                    <p>Ime profesora:</p>
                    <p>{{ $profesor->ime }}</p>
                </div>
                <div>
                    <p>Prezime profesora:</p>
                    <p>{{ $profesor->prezime }}</p>
                </div>
                <div>
                    <p>Godiste profesora:</p>
                    <p>{{ $profesor->godiste }}</p>
                </div>
                <div>
                    <p>Skola profesora:</p>
                    <p>{{ $profesor->skola->naziv_skole }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection