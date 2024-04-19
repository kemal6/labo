<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\These;
use App\Models\Membre;
use App\Models\Dirige;

class TheseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexm()
    {
        //
// Création d'un nouveau master

// // Thèse 3
// $master = new master;
// $master->titre = 'Modélisation des écosystèmes marins sous changement climatique';
// $master->description = 'doctorat';
// $master->dateDebut = '2025-01-15';
// $master->dateFin = '2029-01-14';
// $master->membre_id = 4; 
// $master->type = 'doctorat';
// $master->url = 'https://master.com';
// $master->save();


// // Thèse 4
// $master = new master;
// $master->titre = 'Intelligence artificielle et reconnaissance de formes';
// $master->description = 'doctorat';
// $master->dateDebut = '2025-02-01';
// $master->dateFin = '2029-01-31';
// $master->membre_id = 5; 
// $master->type = 'doctorat';
// $master->url = 'https://master.com';
// $master->save();



        return view('mastersec');
    }


    public function indexsm()
    {
        //

        return view('masterses');
    }

    public function directm()
    {
        //
        return view('master');
    }

    public function index()
    {
        //
// Création d'un nouveau these

// // Thèse 3
// $these = new these;
// $these->titre = 'Modélisation des écosystèmes marins sous changement climatique';
// $these->description = 'doctorat';
// $these->dateDebut = '2025-01-15';
// $these->dateFin = '2029-01-14';
// $these->membre_id = 4; 
// $these->type = 'doctorat';
// $these->url = 'https://these.com';
// $these->save();


// // Thèse 4
// $these = new these;
// $these->titre = 'Intelligence artificielle et reconnaissance de formes';
// $these->description = 'doctorat';
// $these->dateDebut = '2025-02-01';
// $these->dateFin = '2029-01-31';
// $these->membre_id = 5; 
// $these->type = 'doctorat';
// $these->url = 'https://these.com';
// $these->save();



        return view('thesesec');
    }


    public function indexs()
    {
        //

        return view('theseses');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function direct()
    {
        //
        return view('doctorat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

            
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
