@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista profesora</div>
                    @if(count($profesori))
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <th>Id</th>
                                <th>Ime</th>
                                <th>Prezime</th>
                                <th>Godiste</th>
                                <th>Skola</th>
                                <th>Izmeni</th>
                                <th>Obrisi</th>
                                </thead>
                                <tbody>
                                {{-- comment --}}
                                {{-- @if(isset($ucenik->skola->naziv_skole)) {{ $ucenik->skola->naziv_skole }} @else null @endif --}}
                                @foreach($profesori as $profesor)
                                    <tr>
                                        <td>{{ $profesor->id }}</td>
                                        <td>{{ $profesor->ime }}</td>
                                        <td>{{ $profesor->prezime }}</td>
                                        <td>{{ $profesor->godiste }}</td>
                                        <td>{{ isset($profesor->skola->naziv_skole) ? $profesor->skola->naziv_skole : '-' }}</td>
                                        <td><a href="{{ route('profesor.edit', [$profesor->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['profesor.destroy', $profesor->id], 'method' => 'DELETE']) }}
                                            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>Nema Profesora</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection