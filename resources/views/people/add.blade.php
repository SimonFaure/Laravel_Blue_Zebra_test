

@extends('default')


@section('content')



    <h1>Ajouter une personne</h1>

    <a href="/"><button class="btn btn-primary">Retour à la liste</button></a>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ action('PeopleController@create') }}" method="post">

        <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->

        <div class="form-group">

            <label for="firstName">Nom</label>

            <input type="text" name="firstName" id="firstName" placeholder="ex: Karenine" class="form-control">

            <label for="lastName">Prénom</label>

            <input type="text" name="lastName" id="lastName" placeholder="ex: Anna" class="form-control">

            <label for="birthday">Date de Naissance</label>

            <input type="date" name="birthday" id="birthday" class="form-control">

            <label for="email">Email</label>

            <input type="email" name="email" id="email" class="form-control">


        </div>

        <div class="form-group">

            <button class="btn btn-primary" id="ajouter">Ajouter</button>

        </div>

    </form>


@stop

