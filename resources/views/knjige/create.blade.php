@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Nova knjiga</div>

                    @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                    <div class="panel-body">
                        {{ Form::open(['route' => 'knjiga.store', 'method' => 'POST']) }}
                        <div class="form-group required {{ $errors->first('ime', 'has-error') }}">
                            {{ Form::label('naziv', 'Naziv knjige', ['class' => 'control-label']) }}
                            {{ Form::text('naziv', '', ['class' => 'form-control']) }}
                        </div>

                        <div class="form-group required {{ $errors->first('autor', 'has-error') }}">
                            {{ Form::label('autor', 'Autor knjige', ['class' => 'control-label']) }}
                            {{ Form::text('autor', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('godiste', 'has-error') }}">
                            {{ Form::label('broj_strana', 'Broj strana', ['class' => 'control-label']) }}
                            {{ Form::text('broj_strana', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('biblioteka', 'has-error') }}">
                            {{ Form::label('biblioteka', 'Biblioteka', ['class' => 'control-label']) }}
                            {{ Form::select('biblioteka', $biblioteke, null, ['class' => 'form-control', 'placeholder' => 'Izaberite...']) }}
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