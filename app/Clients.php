<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    protected $fillable = [
        'name',
        'identity',
        'phone',
        'address',
        'zipCode',
        'number',
        'complement'
    ];
}
