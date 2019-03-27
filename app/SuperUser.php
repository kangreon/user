<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuperUser extends Model
{
    protected $fillable = [
        'name', 'email', 'birthday', 'gender'
    ];
}
