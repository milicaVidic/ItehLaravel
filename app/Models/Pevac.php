<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pesma;

class Pevac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'godine',
        'instagram'
    ];

    public function pesme()
    {
        return $this->hasMany(Pesma::class);
    }
}
