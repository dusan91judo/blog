@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id napomene:</p>
                    <p>{{ $napomena->id }}</p>
                </div>
                <div>
                    <p>Naziv napomene:</p>
                    <p>{{ $napomena->naziv }}</p>
                </div>
                <div>
                    <p>Tekst napomene:</p>
                    <p>{{ $napomena->tekst }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection