<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addprofil extends Model
{
    use HasFactory;

    protected $table = 'profils';

    //Définir l'accèsibilité de nos propriétés.
    protected $fillable = [
        'nomprofil',
        'contact'
    ];

        // Relation : un profil peut avoir plusieurs produits associés
        public function products()
        {
            return $this->hasMany(Addproduct::class);  // Relier à Addproduct (produits)
        }

}
