<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'tblLinks';
    protected $primaryKey = 'linkId';

    // Disable timestamps for this model
    public $timestamps = false;
}
