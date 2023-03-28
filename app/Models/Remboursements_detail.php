<?php

namespace App\Models;

use App\Models\Panier;
use App\Models\Reservation;
use App\Models\Remboursements;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Remboursements_detail extends Model
{
    use HasFactory;
    public function Remboursement()
    {
        return $this->belongsTo(Remboursements::class);
    }
    public function Panier()
    {
        return $this->belongsTo(Panier::class);
    }
    public function Reservation()
    {
        return $this->hasOne(Reservation::class);
    }
}
