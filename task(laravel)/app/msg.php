<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
    protected $fillable = [
        'name', 'email', 'msg',
    ];
}
