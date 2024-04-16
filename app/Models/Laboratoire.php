<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;
    protected $table = 'laboratoire';

    protected $fillable = ['nom', 'description', 'adresse', 'telephone', 'email'];
}
