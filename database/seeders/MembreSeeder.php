<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Laboratoire;
use App\Models\Departement;
use App\Models\Projet;
use App\Models\Membre;
use App\Models\These;
use App\Models\Publication;
use App\Models\Actualite;
use App\Models\Evenement;

class MembreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {

            $membre = Membre::create([
                'nom' => $faker->lastName,
                'prenom' => $faker->firstName,
                'email' => $faker->email,
                'role' => $faker->jobTitle,
                'departement_id' => $departement->id,
            ]);
        }
    }
}
