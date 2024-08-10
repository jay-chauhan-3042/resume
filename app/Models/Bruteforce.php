<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bruteforce extends Model
{
    protected $table = 'tblBruteforce';
    protected $primaryKey = 'bfId';

    // Disable timestamps for this model
    public $timestamps = false;
}
