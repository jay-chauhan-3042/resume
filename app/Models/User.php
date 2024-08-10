<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tblUser';
    protected $primaryKey = 'userId';

    // Disable timestamps for this model
    public $timestamps = false;
}
