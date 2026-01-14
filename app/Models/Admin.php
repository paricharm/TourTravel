<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='admin';

    protected $fillable = [
        'email',
        'password',
        'username',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
