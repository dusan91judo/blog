@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista skola</div>
                    @if(count($skole))
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <th>Id</th>
                                <th>Naziv skole</th>
                                <th>Ulica</th>
                                <th>Broj</th>
                                <th>Izmeni</th>
                                <th>Obrisi</th>
                                </thead>
                                <tbody>
                                @foreach($skole as $skola)
                                    <tr>
                                        <td>{{ $skola->id }}</td>
                                        <td>{{ $skola->naziv_skole }}</td>
                                        <td>{{ $skola->ulica }}</td>
                                        <td>{{ $skola->broj }}</td>
                                        <td><a href="{{ route('skola.edit', [$skola->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['skola.destroy', $skola->id], 'method' => 'DELETE']) }}
                                            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>Nema Skole</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(['Dusan', 'Mladen', 'Bob'] as $ime)
                <p>{{ $ime }}</p>
            @endforeach
        </div>
    </div>
@endsection