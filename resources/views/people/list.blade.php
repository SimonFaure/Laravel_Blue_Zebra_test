

@extends('default')


@section('content')

    <script>

        $(document).ready(function(){
            $('#peopleTable').DataTable();

            $(".delete").on('click', function(){
                return confirm("Etes-vous bien sûr de vouloir supprimer cette personne?");
            });
        });

    </script>

    <h1>Liste des personnes</h1>

    @if(Session::has('status'))
        <div class="alert alert-success">
            {{ Session::get('status') }}
        </div>
    @endif


        <a href="/ajouter"><button class="btn btn-primary">Ajouter</button> </a>



    <table id="peopleTable">
        <thead>

            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>

        </thead>
        @foreach($peoples as $people)

            <tr>

                    <td> <a href="detail/{{ $people -> id }}">{{ $people -> firstName }} </a></td>
                    <td> <a href="detail/{{ $people -> id }}">{{ $people -> lastName }} </a></td>
                    <td> <a href="detail/{{ $people -> id }}">{{ $people -> birthday }} </a></td>
                    <td> <a href="detail/{{ $people -> id }}">{{ $people -> email }} </a></td>
                    <td>
                        <form action="{{ action('PeopleController@modify') }}" method="get">

                            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                            <input type="hidden" name="id" value="{{ $people -> id }}">

                            <div class="form-group">

                                <button class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>

                            </div>

                        </form>
                    </td>

                <td>
                    <form action="{{ action('PeopleController@delete') }}" method="post">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{{ $people -> id }}">

                        <div class="form-group">

                            <button class="btn btn-danger delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

                        </div>

                    </form>
                </td>

            </tr>

        @endforeach

    </table>

@stop

