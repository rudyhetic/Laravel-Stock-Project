<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addproduct extends Model
{
    use HasFactory;

    protected $table = 'products';

    //Définir l'accèsibilité de nos propriétés.
    protected $fillable = [
        'nom',
        'description',
        'categorie',
        'quantite',
        'profil_id'  // Ajouter profil_id dans fillable
    ];

    // Relation : chaque produit appartient à un profil
    public function profil()
    {
        return $this->belongsTo(Addprofil::class, 'profil_id');
    }

}
