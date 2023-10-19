@extends('GestionEtudiants.layout')

@section('title', 'Modifier un étudiant')

@section('content')

<div class="row">
            <div class="col-md-6 col-md-offset-3">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                <li>{{$error}}</li>
                            </div>
                        @endforeach
                    </ul>
            <h1 class="text-primary">MODIFIER ETUDIANT</h1>
                <form action="/modifier/traitementModification" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$etudiants->id}}">
                    <label class="text-primary">Nom Etudiant</label>
                    <input type="text" name="studentName" id=""  class="form-control" value="{{$etudiants->studentName}}">
                    <label class="text-primary">Postnom Etudiant</label>
                    <input type="text" name="studentLast" id=""  class="form-control" value="{{$etudiants->studentLast}}">
                    <label class="text-primary">Prenom Etudiant</label>
                    <input type="text" name="studentNick" id=""  class="form-control" value="{{$etudiants->studentNick}}">
                    <label class="text-primary">Sexe Etudiant</label>
                    <select name="sex" id="" class="form-control text-primary" value="{{$etudiants->sex}}">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                    <label class="text-primary">Classe Etudiant</label>
                    <input type="text" name="studentClasse" id=""  class="form-control" value="{{$etudiants->studentClasse}}"><br>

                    <div class="col-md-6">
                         <button type="submit" class="btn btn-primary form-control">Modifier</button>
                    </div>

                </form>
            </div>
        </div>

@endsection