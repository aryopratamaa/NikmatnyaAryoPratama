<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $table = "partners";
    protected $fillable = ['namausaha', 'alamat', 'deskripsi', 'typeID'];

    public function partnerType()
    {
        return $this->belongsTo(Partnertype::class, 'typeID');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'partnerID');
    }

    public function promos()
    {
        return $this->hasMany(Promo::class, 'partnerID');
    }
}
