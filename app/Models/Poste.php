<?php

namespace App\Models;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poste extends Model
{
    use HasFactory;
    public function Reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function Reservation_details()
    {
        return $this->hasMany(Reservation_Detail::class);
    }
}
?>
