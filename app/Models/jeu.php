<?php

namespace App\Models;

use App\Models\Reservation;
use App\Models\categoriedesjeux;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class jeu extends Model
{
    use HasFactory;
    protected $fillable = ['Jeu_nom','Jeu_Description','Jeu_image','Jeu_teaser','Jeu_ageMinimum','Jeu_duree','Jeu_tarif','Jeu_nombre_max_joueurs','Jeu_nombre_max_joueurs','categoriesdesjeux_id'];
    public function categoriesdesjeux()
    {
        return $this->belongsTo(categoriedesjeux::class);
    }
    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
?>
