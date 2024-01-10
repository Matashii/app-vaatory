<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rower extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'age_category',
        'date_of_birth',
        'availability',
    ];
}
