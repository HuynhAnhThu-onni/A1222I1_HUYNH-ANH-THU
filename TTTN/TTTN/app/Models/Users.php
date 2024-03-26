<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'customer';
    protected $fillable=[
        '_id',
        'code',
        'fullname',
        'username',
        'password',
        'address',
        'phone',
        'email',
        'role'
    ];

}
