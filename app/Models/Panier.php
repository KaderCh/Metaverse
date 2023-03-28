<?php

namespace App\Models;

use App\Models\Reservation;
use App\Models\Utilisateur;
use App\Models\Remboursements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Panier extends Model
{
    use HasFactory;
    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function Utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function Remboursements()
    {
        return $this->haMany(Remboursements::class);
    }
    public function Remboursements_details()
    {
        return $this->haMany(Remboursements_detail::class);
    }
}
