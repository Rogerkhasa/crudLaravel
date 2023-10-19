<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class ListeEtudiants extends Controller
{
    function AffEtudiants ()
    {
        $listes = Etudiant::all();
        return view('GestionEtudiants.liste', compact('listes'));
    }

    function AjoutEtudiants ()
    {
        return view('GestionEtudiants.ajouter');
    }

    function Traitement (Request $request) 
    {
        $request->validate([
            'studentName'=>'required',
            'studentNick'=>'required',
            'studentLast'=>'required',
            'sex'=>'required',
            'studentClasse'=>'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->studentName=$request->studentName;
        $etudiant->studentLast=$request->studentLast;
        $etudiant->studentNick=$request->studentNick;
        $etudiant->sex=$request->sex;
        $etudiant->studentClasse=$request->studentClasse;
        $etudiant->save();
        return redirect('/ajouter')->with('success', 'L\'étudiant(e) a été ajouter avec succès!');
    }

    public function modifier($id){
        $etudiants = Etudiant::find($id);
        return view('GestionEtudiants.modifier', compact('etudiants'));
    }

    public function TraitementModification(Request $request)
    {
        $request->validate([
            'studentName'=>'required',
            'studentNick'=>'required',
            'studentLast'=>'required',
            'sex'=>'required',
            'studentClasse'=>'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->studentName=$request->studentName;
        $etudiant->studentLast=$request->studentLast;
        $etudiant->studentNick=$request->studentNick;
        $etudiant->sex=$request->sex;
        $etudiant->studentClasse=$request->studentClasse;
        $etudiant->update();
        return redirect('/')->with('success', 'L\'étudiant(e) a été modifier avec succès!');
    }

    public function Suppression($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/')->with('success', 'L\'étudiant(e) a été supprimer!');
    }
}
