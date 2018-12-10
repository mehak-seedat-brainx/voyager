<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'name'
    ];
}
