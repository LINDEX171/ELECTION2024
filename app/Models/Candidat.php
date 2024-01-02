<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{


    use HasFactory;
    protected $fillable= [
        'Nom',
        'Prenom',
        'Partie',
        'Biographie',
        'validité',
        'photo',

    ];

    public function electeurs()
{
    return $this->hasMany(Electeur::class);
}


}
