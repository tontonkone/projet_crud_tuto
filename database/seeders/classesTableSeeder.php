<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
/**
 * Classe Seeder pour  remplir  la table 'classes' avec des données d'exemple.
 */
class ClassesTableSeeder extends Seeder
{
    /**
     * Exécute le remplissage de la base de données.
     *
     * @return void
     */
    public function run(): void
    {
        // Insère des données d'exemple dans la table 'classes'.
        // Chaque entrée est un tableau associatif avec la clé "libelle".
        DB::table('classes')->insert([
            ["libelle" => "6eme"],  
            ["libelle" => "5eme"],  
            ["libelle" => "4eme"],   
            ["libelle" => "3eme"],  
        ]);
    }
}

