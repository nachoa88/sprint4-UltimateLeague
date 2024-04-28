<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // The attributes that are mass assignable, which means we can assign values to these fields from the form.
    protected $fillable = ['name', 'city', 'league', 'logo'];
}
