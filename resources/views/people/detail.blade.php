

@extends('default')


@section('content')

    <script>

        $(document).ready(function(){
            $('#peopleTableDetail').DataTable();
        });

    </script>

    <h1>Détail</h1>

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

    <table id="peopleTableDetail">

        <thead>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Date de Naissance</th>
            <th>Email</th>
            <th></th>
        </tr>

        </thead>

        <tr>
            <td> {{ $individual -> firstName }} </td>
            <td> {{ $individual -> lastName }} </td>
            <td> {{ $individual -> birthday }} </td>
            <td> {{ $individual -> email }} </td>
            <td>
                <form action="{{ action('PeopleController@modify') }}" method="get">

                    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                    <input type="hidden" name="id" value="{{ $individual -> id }}">

                    <div class="form-group">

                        <button class="btn btn-primary">Modifier</button>

                    </div>

                </form>
            </td>
        </tr>

    </table>

    <form action="{{ action('PeopleController@create') }}" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

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

            <button class="btn btn-primary">Ajouter</button>

        </div>

    </form>



@stop

