<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facts extends Model
{
    protected $table = 'tblFacts';
    protected $primaryKey = 'fId';

    // Disable timestamps for this model
    public $timestamps = false;
}
