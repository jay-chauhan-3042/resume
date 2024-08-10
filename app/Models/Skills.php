<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    protected $table = 'tblSkills';
    protected $primaryKey = 'skillId';

    // Disable timestamps for this model
    public $timestamps = false;
}
