<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{

    public function messages(){
        return [
            'nom.required' => 'le nom est obligatoire',
            'prenom.required' => 'le prenom est obligatoire',
            'classe_id.required' => 'ne peut pas être null'
        ];
    }
    Public function index(){
        
        $etudiants = Etudiant::orderBy('nom','asc')->paginate(15);
        return view("etudiant", compact("etudiants"));
    }

    public function create(){
        
        $classes = Classe::all();
        return view("createEtudiant", compact("classes"));
    }

    
    public function edit(Etudiant $etudiant){
        $classes = Classe::all();
        return view("editEtudiant", compact("etudiant","classes"));
    }


    public function store(Request $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);

        Etudiant::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "classe_id"=>$request->classe_id
        ]);

        return back()->with("success", "Etudiant ajouté avec succès!");
    }

    public function delete(Etudiant $etudiant){
        $nomComplet = $etudiant->nom . " " . $etudiant->prenom;
        $etudiant->delete();
        return back()->with("successDelete", "Etudiant $nomComplet supprimé !");
    }

    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);

        $etudiant->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "classe_id"=>$request->classe_id
        ]);

        return back()->with("success", "Etudiant mis à jour avec succès!");
    }

}
