@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Unesite napomene</div>
                    @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                    <div class="panel-body">
                        {{ Form::open(['route' => ['skola.napomena.edit', $skolaId], 'method' => 'GET']) }}
                        <div class="row">
                            @foreach($napomene as $napomena)
                                <div class="col-md-4">
                                    <div class="form-group required {{ $errors->first('naziv', 'has-error') }}">
                                        {{ Form::label('naziv'.$napomena->id, 'Naziv napomene '. $napomena->id, ['class' => 'control-label']) }}
                                        {{ Form::text('naziv'.$napomena->id, $napomena->naziv, ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group required {{ $errors->first('tekst', 'has-error') }}">
                                        {{ Form::label('tekst'.$napomena->id, 'Unesite tekst ' . $napomena->id, ['class' => 'control-label']) }}
                                        {{ Form::textarea('tekst'.$napomena->id, $napomena->tekst, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            {{ Form::submit('Sacuvaj', ['class' => 'btn btn-primary']) }}
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection