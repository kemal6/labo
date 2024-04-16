<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'contenu', 'datePublication', 'laboratoire_id'];

    public function laboratoire()
    {
        return $this->belongsTo(Laboratoire::class);
    }
}
