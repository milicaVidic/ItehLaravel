<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesma;

class Tekstopisac extends Model
{
    use HasFactory;

    public function pesme()
    {
        return $this->hasMany(Pesma::class);
    }
}
