@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista dogadjaja</div>
                    @if(count($dogadjaji))
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
                                @foreach($dogadjaji as $dogadjaj)
                                    <tr>
                                        <td>{{ $dogadjaj->id }}</td>
                                        <td>{{ $dogadjaj->naziv }}</td>
                                        <td>{{ $dogadjaj->tekst }}</td>
                                        <td>{{ isset($dogadjaj->naziv) ? $dogadjaj->naziv : '-' }}</td>
                                        <td><a href="{{ route('dogadjaj.edit', [$dogadjaj->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['dogadjaj.destroy', $dogadjaj->id], 'method' => 'DELETE']) }}
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