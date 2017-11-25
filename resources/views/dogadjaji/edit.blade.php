@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Unesite dogadjaj</div>
                    @foreach($errors->all() as $error)
                        <p style="color:red;">{{ $error }}</p>
                    @endforeach
                    <div class="panel-body">
                        {{ Form::open(['route' => ['dogadjaj.update', $dogadjaj->id], 'method' => 'PUT']) }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group required {{ $errors->first('naziv', 'has-error') }}">
                                    {{ Form::label('naziv', 'Naziv dogadjaja', ['class' => 'control-label']) }}
                                    {{ Form::text('naziv', $dogadjaj->naziv, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group required {{ $errors->first('tekst', 'has-error') }}">
                                    {{ Form::label('tekst', 'Unesite tekst ', ['class' => 'control-label']) }}
                                    {{ Form::textarea('tekst', isset($dogadjaj->tekst) ? $dogadjaj->tekst : null, ['class' => 'form-control']) }}
                                </div>
                            </div>
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