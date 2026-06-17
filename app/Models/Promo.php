<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promos';
    protected $fillable = ['persen', 'mulai_tgl', 'hingga_tgl', 'partnerID'];

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partnerID');
    }
}
