<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dirige extends Model
{
    use HasFactory;

    protected $fillable = ['directeur_id', 'these_id','codirecteur'];

    public function dirige()
    {
        return $this->belongsTo(Dirige::class,'these_id','directeur_id');
    }
}
