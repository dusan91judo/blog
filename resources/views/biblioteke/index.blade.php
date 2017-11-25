@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista biblioteka</div>
                    @if(count($biblioteke))
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <th>Id</th>
                                <th>Naziv</th>
                                <th>Ulica</th>
                                <th>Izmeni</th>
                                <th>Obrisi</th>
                                </thead>
                                <tbody>
                                @foreach($biblioteke as $biblioteka)
                                    <tr>
                                        <td>{{ $biblioteka->id }}</td>
                                        <td>{{ $biblioteka->naziv }}</td>
                                        <td>{{ $biblioteka->ulica }}</td>
                                        <td>{{ isset($biblioteka->knjiga->naziv) ? $biblioteka->knjiga->naziv : '-' }}</td>
                                        <td><a href="{{ route('biblioteka.edit', [$biblioteka->id]) }}" class="btn btn-default">Izmeni</a></td>
                                        <td>
                                            {{ Form::open(['route' => ['biblioteka.destroy', $biblioteka->id], 'method' => 'DELETE']) }}
                                            {{ Form::submit('Obrisi', ['class' => 'btn btn-danger']) }}
                                            {{ Form::close() }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div>Nema Biblioteke</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection