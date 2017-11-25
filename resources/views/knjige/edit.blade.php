@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nova knjiga</div>
                    <div class="panel-body">
                        {{ Form::open(['route' => ['knjiga.update', $knjiga->id], 'method' => 'PUT']) }}
                        <div class="form-group required {{ $errors->first('title', 'has-error') }}">
                            {{ Form::label('naziv', 'Naziv knjige', ['class' => 'control-label']) }}
                            {{ Form::text('naziv', $knjiga->naziv, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('autor', 'Autor knjige', ['class' => 'control-label']) }}
                            {{ Form::text('autor', $knjiga->autor, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('broj_strana', 'Broj strana', ['class' => 'control-label']) }}
                            {{ Form::number('broj_strana', $knjiga->broj_strana, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('skola', 'has-error') }}">
                            {{ Form::label('biblioteka', 'Biblioteka', ['class' => 'control-label']) }}
                            {{ Form::select('biblioteka', $biblioteke, isset($knjiga->biblioteka_id) ? $knjiga->biblioteka_id : null, ['class' => 'form-control', 'placeholder' => 'Izaberite...']) }}
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