<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'tblImages';
    protected $primaryKey = 'imgId';

    // Disable timestamps for this model
    public $timestamps = false;
}
