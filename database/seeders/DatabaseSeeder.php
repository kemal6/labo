<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboratoire;
use App\Models\Departement;
use App\Models\Projet;
use App\Models\Membre;
use App\Models\These;
use App\Models\Publication;
use App\Models\Actualite;
use App\Models\Evenement;

use Database\Seeders\LaboratoireSeeder;
use Database\Seeders\DepartementSeeder;
use Database\Seeders\ProjetSeeder;
use Database\Seeders\MembreSeeder;
use Database\Seeders\TheseSeeder;
use Database\Seeders\PublicationSeeder;
use Database\Seeders\ActualiteSeeder;
use Database\Seeders\EvenementSeeder;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $faker = Faker::create('fr_FR');
        $this->call([
            LaboratoireSeeder::class,
            DepartementSeeder::class,
            ProjetSeeder::class,
            MembreSeeder::class,
            TheseSeeder::class,
            PublicationSeeder::class,
            ActualiteSeeder::class,
            EvenementSeeder::class,
        ]);
    }
}
