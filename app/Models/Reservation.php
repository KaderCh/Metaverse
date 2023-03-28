<?php

namespace App\Models;

use App\Models\jeu;
use App\Models\Poste;
use App\Models\Panier;
use App\Models\Promotion;
use App\Models\Utilisateur;
use App\Models\Remboursements;
use App\Models\Reservation_Detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    public function Postes()
    {
        return $this->hasMany(Poste::class);
    }
    public function jeu()
    {
        return $this->belongsTo(jeu::class);
    }
    public function Utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function Promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
    public function Panier()
    {
        return $this->belongsTo(Panier::class);
    }
    public function Reservation_details()
    {
        return $this->hasMany(Reservation_Detail::class);
    }
    public function Rembousement_detail()
    {
        return $this->hasMany(Remboursements_detail::class);
    }
}
?>