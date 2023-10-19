@extends('GestionEtudiants.layout')

@section('title','Ajouter étudiants')

@section('content')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                    <ul>
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                <li>{{$error}}</li>
                            </div>
                        @endforeach
                    </ul>
            <h1 class="text-primary">AJOUTER ETUDIANTS</h1>
                <form action="/ajouter/traitement" method="POST">
                    @csrf
                    <label class="text-primary">Nom Etudiant</label>
                    <input type="text" name="studentName" id=""  class="form-control">
                    <label class="text-primary">Postnom Etudiant</label>
                    <input type="text" name="studentLast" id=""  class="form-control">
                    <label class="text-primary">Prenom Etudiant</label>
                    <input type="text" name="studentNick" id=""  class="form-control">
                    <label class="text-primary">Sexe Etudiant</label>
                    <select name="sex" id="" class="form-control text-primary">
                        <option value="M">Masculin</option>
                        <option value="F">Féminin</option>
                    </select>
                    <label class="text-primary">Classe Etudiant</label>
                    <input type="text" name="studentClasse" id=""  class="form-control"><br>

                    <div class="col-md-6">
                         <button type="submit" class="btn btn-primary form-control">Enregistrer</button>
                    </div>

                </form>
            </div>
        </div>

@endsection