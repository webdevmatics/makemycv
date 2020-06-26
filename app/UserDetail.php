<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['fullname', 'phone', 'email', 'address','summary'];
}
