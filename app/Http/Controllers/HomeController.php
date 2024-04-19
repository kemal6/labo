<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;

class HomeController extends Controller
{
public function index()
{

// // Création d'un nouveau membre
// $membre = new Membre;
// $membre->nom = 'Julie';
// $membre->prenom = 'Jo';
// $membre->email = 'jn.doe@example.com';
// $membre->role = 'masterant';
// $membre->departement_id = 1; // Assurez-vous que le département avec l'ID 1 existe
// $membre->save();

// $membre = new Membre;
// $membre->nom = 'malie';
// $membre->prenom = 'Jof';
// $membre->email = 'jf.doe@example.com';
// $membre->role = 'masterant';
// $membre->departement_id = 1; // Assurez-vous que le département avec l'ID 1 existe
// $membre->save();

// $membre = new Membre;
// $membre->nom = 'Job';
// $membre->prenom = 'Jo';
// $membre->email = 'jn.doe@example.com';
// $membre->role = 'doctorant';
// $membre->departement_id = 1; // Assurez-vous que le département avec l'ID 1 existe
// $membre->save();



$membres = Membre::all();
if($membres->isEmpty()){
dd('Aucune donnée trouvée dans la table membres.');
} else {
//dd($membres);
}

return view('welcome');

// return view('welcome', [
//     'membres' => $membres
//     ]);

}
}
