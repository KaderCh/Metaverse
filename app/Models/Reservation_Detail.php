<?php

namespace App\Models;

use App\Models\Poste;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation_Detail extends Model
{
    use HasFactory;
    public function Poste()
    {
        return $this->belongsTo(Poste::class);
    }
    public function Reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
