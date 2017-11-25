@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista clanaka</div>
                    @if(count($articles))
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <th>Id</th>
                                <th>Naziv</th>
                                <th>Tekst</th>
                                <th>Edit</th>
                                <th>Obrisi</th>
                            </thead>
                            <tbody>
                            <a href="#">Mladen link</a>
                                @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td><a href="{{ route('article.show', [$article->id]) }}">{{ $article->title }}</a></td>
                                    <td>{{ $article->text }}</td>
                                    <td><a href="{{ route('article.edit', [$article->id]) }}" class="btn btn-default">Izmeni</a></td>
                                    <td>
                                        {{ Form::open(['route' => ['article.destroy', $article->id], 'method' => 'DELETE']) }}
                                        {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <div>Nema clanaka</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection