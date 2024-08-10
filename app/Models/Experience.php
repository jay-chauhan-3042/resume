<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'tblExperience';
    protected $primaryKey = 'expId';

    // Disable timestamps for this model
    public $timestamps = false;
}
