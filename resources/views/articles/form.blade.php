<div class="form-group required {{ $errors->first('title', 'has-error') }}">
    {{ Form::label('title', 'Naziv artikla', ['class' => 'control-label']) }}
    {{ Form::text('title', (isset($article)) ? $article->title : '', ['class' => 'form-control']) }}
</div>
<div class="form-group required {{ $errors->first('text', 'has-error') }}">
    {{ Form::label('text', 'Naziv artikla', ['class' => 'control-label']) }}
    {{ Form::textarea('text', (isset($article)) ? $article->text : '', ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Sacuvaj', ['class' => 'btn btn-primary']) }}
</div>