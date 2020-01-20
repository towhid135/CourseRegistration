<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = 'studentID';
    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'unsignedInteger';
    //public $incrementing = false;
    public $timestamps = false;
}
