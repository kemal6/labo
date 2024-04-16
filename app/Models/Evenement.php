<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'description', 'date', 'lieu', 'laboratoire_id'];

    public function laboratoire()
    {
        return $this->belongsTo(Laboratoire::class);
    }
}
