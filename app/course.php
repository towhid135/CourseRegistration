<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $primaryKey = 'CourseID';
    protected $keyType = 'string';
    public $timestamps = false;
    public $incrementing = false;
}
