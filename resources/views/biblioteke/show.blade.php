@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Id biblioteke:</p>
                    <p>{{ $biblioteka->id }}</p>
                </div>
                <div>
                    <p>Naziv biblioteke:</p>
                    <p>{{ $biblioteka->naziv }}</p>
                </div>
                <div>
                    <p>Ulica:</p>
                    <p>{{ $biblioteka->ulica }}</p>
                </div>
                <div>
                    <a href="{{ route('biblioteka.create', ['biblioteka' => $biblioteka->id]) }}" class="btn btn-primary">Dodaj knjigu</a>
                </div>
                <div>
                    <p>Knjiga:</p>
                    @if(count($biblioteka->knjige) > 0)
                        @foreach($biblioteka->knjige as $knjiga)
                            <div style="border: 1px solid #cccccc;">
                                <p>{{ $knjiga->naziv }}</p>
                                <p>{{ $knjiga->autor }}</p>
                                <p>{{ $knjiga->broj_strana }}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection