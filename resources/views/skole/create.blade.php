@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Novo ime skole</div>
                    @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                    <div class="panel-body">
                        {{ Form::open(['route' => 'skola.store', 'method' => 'POST']) }}
                        <div class="form-group required {{ $errors->first('ime', 'has-error') }}">
                            {{ Form::label('naziv_skole', 'Ime skole', ['class' => 'control-label']) }}
                            {{ Form::text('naziv_skole', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('prezime', 'has-error') }}">
                            {{ Form::label('ulica', 'Ulica skole', ['class' => 'control-label']) }}
                            {{ Form::text('ulica', '', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group required {{ $errors->first('godiste', 'has-error') }}">
                            {{ Form::label('broj', 'Broj skole', ['class' => 'control-label']) }}
                            {{ Form::text('broj', '', ['class' => 'form-control']) }}
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