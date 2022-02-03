<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tekstopisac;
use App\Models\Pevac;

class Pesma extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'godina',
        'pevac_id',
        'tekstopisac_id'
    ];

    public function tekstopisac()
    {
        return $this->belongsTo(Tekstopisac::class);
    }

    public function pevac()
    {
        return $this->belongsTo(Pevac::class);
    }
}
