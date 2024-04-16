<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'resume', 'datePublication', 'lien', 'membre_id'];

    public function membre()
    {
        return $this->belongsTo(Membre::class);
    }
}