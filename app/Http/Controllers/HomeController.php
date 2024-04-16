<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;

class HomeController extends Controller
{
public function index()
{

// Création d'un nouveau membre
$membre = new Membre;
$membre->nom = 'Doe';
$membre->prenom = 'John';
$membre->email = 'john.doe@example.com';
$membre->role = 'Administrateur';
$membre->departement_id = 1; // Assurez-vous que le département avec l'ID 1 existe
$membre->save();


$membres = Membre::all();
if($membres->isEmpty()){
dd('si Aucune donnée trouvée dans la table membres.');
} else {
dd($membres);
}

return view('welcome', [
'membres' => $membres
]);
}
}
