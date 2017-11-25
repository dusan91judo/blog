@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id knjige:</p>
                    <p>{{ $knjiga->id }}</p>
                </div>
                <div>
                    <p>Naziv knjige:</p>
                    <p>{{ $knjiga->naziv }}</p>
                </div>
                <div>
                    <p>Autor knjige:</p>
                    <p>{{ $knjiga->autor }}</p>
                </div>
                <div>
                    <p>Broj strana:</p>
                    <p>{{ $knjiga->broj_strana }}</p>
                </div>
                <div>
                    <p>Biblioteka:</p>
                    <p>{{ $knjiga->biblioteka->naziv }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection