<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'password'];
}
