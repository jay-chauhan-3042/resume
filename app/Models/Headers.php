<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headers extends Model
{
    protected $table = 'tblApiHeaders';
    protected $primaryKey = 'headerId';
    protected $fillable = [
        'apiHost',
        'headerApiKey',
        'headerApiSecret',
        'headerStatus'
    ];

    // Disable timestamps for this model
    public $timestamps = false;
}
