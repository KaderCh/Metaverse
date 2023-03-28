<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Remboursements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Model
{
    use HasFactory;
    public function Reservations()
    {
        return $this->hasMany(Reservations::class);
    }
    public function Paniers()
    {
        return $this->hasMany(Panier::class);
    }
    public function Remboursements()
    {
        return $this->hasMany(Remboursements::class);
    }
}

