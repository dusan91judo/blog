@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novi ucenik</div>

                    @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                    <div class="panel-body">
                        {{ Form::open(['route' => 'profesor.store', 'method' => 'POST']) }}
                        <div class="form-group required {{ $errors->first('ime', 'has-error') }}">
                            {{ Form::label('ime', 'Ime profesora', ['class' => 'control-label']) }}
                            {{ Form::text('ime', '', ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group required {{ $errors->first('prezime', 'has-error') }}">
                            {{ Form::label('prezime', 'Prezime profesora', ['class' => 'control-label']) }}
                            {{ Form::text('prezime', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('godiste', 'has-error') }}">
                            {{ Form::label('godiste', 'Godiste', ['class' => 'control-label']) }}
                            {{ Form::text('godiste', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('skola', 'has-error') }}">
                            {{ Form::label('skola', 'Skola', ['class' => 'control-label']) }}
                            {{ Form::select('skola', $skole, null, ['class' => 'form-control', 'placeholder' => 'Izaberite...']) }}
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