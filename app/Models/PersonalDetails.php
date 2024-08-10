<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    protected $table = 'tblPersonalDetails';
    protected $primaryKey = 'pdId';

    // Disable timestamps for this model
    public $timestamps = false;
}
