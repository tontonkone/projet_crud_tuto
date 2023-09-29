<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    Public function index(){
        
        $etudiants = Etudiant::orderBy('nom','asc')->get();
        return view("etudiant", compact("etudiants"));
    }
}
