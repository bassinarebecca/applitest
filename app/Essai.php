<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Essai extends Model
{
    protected $fillable = [
        'nom', 'email'
    ];
    protected $guarded =[];

    
}
