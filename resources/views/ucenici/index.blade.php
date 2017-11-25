@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista ucenika</div>
                    @if(count($ucenici))
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
                                @foreach($ucenici as $ucenik)
                                    <tr>
                                        <td>{{ $ucenik->id }}</td>
                                        <td>{{ $ucenik->ime }}</td>
                                        <td>{{ $ucenik->prezime }}</td>
                                        <td>{{ $ucenik->godiste }}</td>
                                        <td>{{ isset($ucenik->skola->naziv_skole) ? $ucenik->skola->naziv_skole : '-' }}</td>
                                        <td><a href="{{ route('ucenik.edit', [$ucenik->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['ucenik.destroy', $ucenik->id], 'method' => 'DELETE']) }}
                                            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>Nema Ucenika</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection