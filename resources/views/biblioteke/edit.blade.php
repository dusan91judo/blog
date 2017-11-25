@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nova biblioteka</div>
                    <div class="panel-body">

                        {{ Form::open(['route' => ['biblioteka.update', $biblioteka->id], 'method' => 'PUT']) }}
                        <div class="form-group required {{ $errors->first('title', 'has-error') }}">
                            {{ Form::label('naziv', 'Naziv biblioteke', ['class' => 'control-label']) }}
                            {{ Form::text('naziv', $biblioteka->naziv, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('ulica', 'Ulica', ['class' => 'control-label']) }}
                            {{ Form::text('ulica', $biblioteka->ulica, ['class' => 'form-control']) }}
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