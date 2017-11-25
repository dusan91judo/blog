@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id dogadjaja:</p>
                    <p>{{ $dogadjaj->id }}</p>
                </div>
                <div>
                    <p>Naziv dogadjaja:</p>
                    <p>{{ $dogadjaj->naziv }}</p>
                </div>
                <div>
                    <p>Tekst dogadjaja:</p>
                    <p>{{ $dogadjaj->tekst }}</p>
                </div>

            </div>
        </div>
    </div>
@endsection