@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novi artikl</div>

                    <div class="panel-body">
                        {{ Form::open(['route' => 'ucenik.store', 'method' => 'POST']) }}
                        <div class="form-group required {{ $errors->first('title', 'has-error') }}">
                            {{ Form::label('ime', 'Ime ucenika', ['class' => 'control-label']) }}
                            {{ Form::text('ime', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('prezime', 'Prezime ucenika', ['class' => 'control-label']) }}
                            {{ Form::text('prezime', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('text', 'has-error') }}">
                            {{ Form::label('godiste', 'Godiste', ['class' => 'control-label']) }}
                            {{ Form::number('godiste', '', ['class' => 'form-control']) }}
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