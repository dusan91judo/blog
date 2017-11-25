@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista knjiga</div>
                    @if(count($knjige))
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <th>Id</th>
                                <th>Naziv</th>
                                <th>Autor</th>
                                <th>Broj strana</th>
                                <th>Biblioteka</th>
                                <th>Izmeni</th>
                                <th>Obrisi</th>
                                </thead>
                                <tbody>
                                @foreach($knjige as $knjiga)
                                    <tr>
                                        <td>{{ $knjiga->id }}</td>
                                        <td>{{ $knjiga->naziv }}</td>
                                        <td>{{ $knjiga->autor }}</td>
                                        <td>{{ $knjiga->broj_strana }}</td>
                                        <td>{{ isset($knjiga->biblioteka->naziv) ? $knjiga->biblioteka->naziv : '-' }}</td>
                                        <td><a href="{{ route('knjiga.edit', [$knjiga->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['knjiga.destroy', $knjiga->id], 'method' => 'DELETE']) }}
                                            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>Nema Knjige</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection