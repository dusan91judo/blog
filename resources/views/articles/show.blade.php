@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div>
                    <p>Naziv artikla:</p>
                    <p>{{ $article->title }}</p>
                </div>
                <div>
                    <p>Tekst artikla:</p>
                    <p>{{ $article->text }}</p>
                </div>
            </div>
        </div>
        <div>Obrisi clanak</div>
        <div>
            {{ Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) }}
            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection