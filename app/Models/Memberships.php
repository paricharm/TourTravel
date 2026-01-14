<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    protected $table = 'membership';

    protected $fillable = [
        'unique_id',
        'user_id',
        'pkg_name',
        'amount',
        'status'
    ];
}
