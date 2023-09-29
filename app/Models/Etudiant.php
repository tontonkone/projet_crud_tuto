<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Modèle Eloquent pour la table 'etudiants'.
 */
class Etudiant extends Model
{
    use HasFactory;
    // Les colonnes de la table 'etudiants' qui peuvent être remplies 

    protected $fillable = ["nom", "prenom", "classe_id"];

    /**
     * Définit une relation "appartient à" entre la table 'etudiants' et la table 'classes'.
     *
     * Cette méthode permet de déclarer une relation de clé étrangère entre la table 'etudiants'
     * et la table 'classes'. Chaque étudiant appartient à une classe spécifique.
     * belongsTo = relation d'appartenance à
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }
}
