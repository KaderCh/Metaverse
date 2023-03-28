<?php

namespace App\Models;

use App\Models\jeu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoriedesjeux extends Model
{
    use HasFactory;
    public function jeus()
    {
        return $this->hasMany(jeus::class);
    }
}
