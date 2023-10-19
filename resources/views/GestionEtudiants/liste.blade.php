@extends ('GestionEtudiants.layout')

@section('title','liste des étudiants')

@section('content')

    <h1 class="text-primary">LISTE DES ETUDIANTS</h1>

    <div class="col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <ul>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NOM</th>
                    <th>POSTNOM</th>
                    <th>PRENOM</th>
                    <th>SEXE</th>
                    <th>CLASSE</th>
                    <th>ACTIONS</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

                @foreach($listes as $liste)


                    <tr>
                        <td>{{$liste->id}}</td>
                        <td>{{$liste->studentName}}</td>
                        <td>{{$liste->studentLast}}</td>
                        <td>{{$liste->studentNick}}</td>
                        <td>{{$liste->sex}}</td>
                        <td>{{$liste->studentClasse}}</td>
                        <td><a href="/modifier/{{$liste->id}}" class="btn btn-primary">Modifier</a></td>
                        <td><a href="/supprimer/{{$liste->id}}" class="btn btn-danger">Supprimer</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection