@extends('base')
@section('contenu')

    <div class="form-group">
        <label for="name">Nom du Projet : </label>
        <input type="email" class="form-control" id="name" placeholder="{{{ $name }}}" disabled>
    </div>
    <div class="form-group">
        <label for="description">Description : </label>
        <textarea class="form-control" id="description" disabled>{{{ $description }}}</textarea>
    </div>
    <p>Est-ce Correct ?</p>
    <a href="{{ URL::route('project.home') }}" class="btn btn-primary">Oui</a>
    <a href="{{ URL::route('project.editForm') }}" class="btn btn-warning">Non</a>
@stop