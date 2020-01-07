<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purohit extends Model
{
    protected $fillable = ['name', 'mobile', 'profile_image', 'grade','date_of_birth'];
}
