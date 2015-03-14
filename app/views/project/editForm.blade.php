@extends('base')
@section('contenu')
    {{ Form::open(array('url' => 'formUpdate')) }}
        <div class="form-group">
            {{ Form::label('name', 'Nom du project : ') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Description : ') }}
            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
        </div>
        {{ Form::submit('Envoyer') }}
    {{ Form::close() }}
@stop