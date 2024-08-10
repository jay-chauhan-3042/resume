<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    protected $table = 'tblInbox';
    protected $primaryKey = 'id';

    // Disable timestamps for this model
    public $timestamps = false;
}
