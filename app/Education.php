<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['school_name', 'school_location', 'degree', 'field_of_study', 'graduation_start_date', 'graduation_end_date'];
}
