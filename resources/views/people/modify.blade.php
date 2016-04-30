@extends('default')


@section('content')

    <h1>Modifier les informations</h1>

    <form action="{{ action('PeopleController@updateIndividual') }}" method="post">

        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{{ $individual -> id }}">
        <div class="form-group">

            <label for="firstName">Nom</label>

            <input type="text" name="firstName" id="firstName" class="form-control" value="{{ $individual -> firstName }}">

            <label for="lastName">Prénom</label>

            <input type="text" name="lastName" id="lastName" value="{{ $individual -> lastName }}" class="form-control">

            <label for="birthday">Date de Naissance</label>

            <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $individual -> birthday }}">

            <label for="email">Email</label>

            <input type="email" name="email" id="email" class="form-control" value="{{ $individual -> email }}">


        </div>

        <div class="form-group">

            <input type="submit" class="btn btn-primary" value="Modifier">

        </div>

    </form>


    <a href="/"><button class="btn btn-primary">Annuler</button></a>


@stop