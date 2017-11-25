@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id skole:</p>
                    <p>{{ $skola->id }}</p>
                </div>
                <div>
                    <p>Naziv skole:</p>
                    <p>{{ $skola->naziv_skole }}</p>
                </div>
                <div>
                    <p>Ulica:</p>
                    <p>{{ $skola->ulica }}</p>
                </div>
                <div>
                    <p>Broj:</p>
                    <p>{{ $skola->broj }}</p>
                </div>
                <div>
                    <a href="{{ route('skola.napomena.create', ['skola' => $skola->id]) }}" class="btn btn-primary">Dodaj napomene</a>
                </div>
                <div>
                    <p>Napomene:</p>
                    @if(count($skola->napomene) > 0)
                        @foreach($skola->napomene as $napomena)
                            <div style="border: 1px solid #cccccc;">
                                <p>{{ $napomena->naziv }}</p>
                                <p>{{ $napomena->tekst }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection