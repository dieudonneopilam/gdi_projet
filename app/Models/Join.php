<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $fillable = [
        'nom',
        'postnom',
        'prenom',
        'mail',
        'phone',
        'datee',
        'niveau',
        'province',
    ];
    use HasFactory;
}
