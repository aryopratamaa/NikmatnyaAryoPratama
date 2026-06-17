<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnertype extends Model
{
    protected $table = 'partnertypes';
    protected $fillable = ['tipe', 'deskripsi'];

    public function partners()
    {
        return $this->hasMany(Partner::class, 'typeID');
    }
}
