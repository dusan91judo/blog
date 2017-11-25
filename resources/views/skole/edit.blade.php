@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nova skola</div>
                    <div class="panel-body">

                        {{ Form::open(['route' => ['skola.update', $skola->id], 'method' => 'PUT']) }}
                        <div class="form-group required {{ $errors->first('title', 'has-error') }}">
                            {{ Form::label('naziv_skole', 'Ime skole', ['class' => 'control-label']) }}
                            {{ Form::text('naziv_skole', $skola->naziv_skole, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('ulica', 'Ulica', ['class' => 'control-label']) }}
                            {{ Form::text('ulica', $skola->ulica, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('broj', 'Broj', ['class' => 'control-label']) }}
                            {{ Form::number('broj', $skola->broj, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('napomena', 'Napomena', ['class' => 'control-label']) }}
                            {{ Form::textarea('napomena', $skola->napomena, ['class' => 'form-control']) }}
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