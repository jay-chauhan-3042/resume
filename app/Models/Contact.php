<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tblContact';
    protected $primaryKey = 'id';

    // Disable timestamps for this model
    public $timestamps = false;
}
