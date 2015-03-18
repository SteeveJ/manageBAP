@extends('base')
@section('contenu')
    <div class="container">
        {{ Form::open(array('url' => 'formUpdate')) }}
            <div class="form-group">
                {{ Form::label('name', 'Nom Commanditaire: ') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('username', 'Prénom commanditaire: ') }}
                {{ Form::text('username', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('work', 'Fonction du commanditaire : ') }}
                {{ Form::text('work', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('adress', 'Adresse  Commanditaire: ') }}
                {{ Form::text('adress', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('CP', 'Code Postal Commanditaire: ') }}
                {{ Form::text('CP', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('emailContact', 'email Contact: ') }}
                {{ Form::text('emailContact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('country', 'Pays ') }}
                {{ Form::text('country', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('nameContact', 'Nom Contact: ') }}
                {{ Form::text('nameContact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('userContact', 'Prénom contact: ') }}
                {{ Form::text('usernameContact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('workContact', 'Fonction du contact : ') }}
                {{ Form::text('workCntact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('adressContact', 'Adresse  contact: ') }}
                {{ Form::text('adressContact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('CPContact', 'Code Postal Commanditaire: ') }}
                {{ Form::text('CPContact', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('countryContact', 'Pays ') }}
                {{ Form::text('countryContact', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('emailContact', 'email Contact: ') }}
                {{ Form::text('emailContact', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Fiche d\'identité : ') }}
                {{ Form::textarea('description', null, ['class' => 'form-control']) }}
            </div>

            {{ Form::submit('Envoyer', null, ['class' => 'btn btn-warning']) }}


        {{ Form::close() }}
    </div>
@stop