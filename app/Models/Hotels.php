<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table='hotels';

    protected $fillable = [
        'unique_id',
        'name',
        'place_id',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'short_desc',
        'address',
        'status',
    ];

    public function place()
    {
        return $this->belongsTo(Places::class, 'place_id', 'unique_id');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class,"hotel_id","unique_id");
    }
}
