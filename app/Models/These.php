<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class These extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'dateDebut', 'dateFin', 'membre_id'];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
}