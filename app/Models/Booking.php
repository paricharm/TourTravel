<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = "bookings";

    protected $fillable = [
        'unique_id','user_id','hotel_id','book_date','duration','status'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id',"unique_id");
    }
    public function hotels()
    {
        return $this->belongsTo(Hotels::class,"hotel_id","unique_id");
    }
}
