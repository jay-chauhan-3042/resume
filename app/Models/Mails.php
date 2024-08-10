<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model
{
    protected $table = 'tblMails';
    protected $primaryKey = 'mailId';

    // Disable timestamps for this model
    public $timestamps = false;
}
