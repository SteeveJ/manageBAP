@extends('base')
@section('contenu')
    {{ Form::open(array('url' => 'formUpdate')) }}
        {{ Form::label('nom', 'Entrez votre nom : ') }}
        {{ Form::text('nom') }}
        {{ Form::submit('Envoyer !') }}
    {{ Form::close() }}
@stop