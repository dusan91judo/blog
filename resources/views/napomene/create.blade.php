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
                        {{ Form::open(['route' => ['skola.napomena.store', $skola->id], 'method' => 'POST']) }}
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="col-md-4">
                                    <div class="form-group required {{ $errors->first('naziv', 'has-error') }}">
                                        {{ Form::label('naziv'.$i, 'Naziv napomene '. $i, ['class' => 'control-label']) }}
                                        {{ Form::text('naziv'.$i, '', ['class' => 'form-control']) }}
                                    </div>
                                    <div class="form-group required {{ $errors->first('tekst', 'has-error') }}">
                                        {{ Form::label('tekst'.$i, 'Unesite tekst ' . $i, ['class' => 'control-label']) }}
                                        {{ Form::textarea('tekst'.$i, '', ['class' => 'form-control']) }}
                                    </div>
                                </div>
                            @endfor
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