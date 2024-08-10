<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'tblEducation';
    protected $primaryKey = 'eduId';

    // Disable timestamps for this model
    public $timestamps = false;
}
