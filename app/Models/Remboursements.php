<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Utilisateur;
use App\Models\Remboursements_detail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Remboursements extends Model
{
    use HasFactory;
    public function Utilisateur()
    {
        return $this->belongsTo(Utilisateur::class);
    }
    public function Remboursements_details()
    {
        return $this->hasMany(Remboursements_detail::class);
    }
    public function Panier()
    {
        return $this->belongsTo(Panier::class);
    }
}

