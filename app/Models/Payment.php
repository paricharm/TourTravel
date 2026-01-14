<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";

    protected $fillable = [
        'unique_id','user_id','pay_date','amount','status','paymode',
    ];

    public function users()
    {
        return $this->belongsTo(User::class ,'user_id','unique_id');
    }
}
