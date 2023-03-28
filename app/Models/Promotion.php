<?php

namespace App\Models;

use App\Models\Partenaire;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    public function Reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function Partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }
}
