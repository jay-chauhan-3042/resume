<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappClient extends Model
{
    protected $table = 'tblWhatsappCredentials';
    protected $primaryKey = 'whatsappAccountId';
    protected $fillable = [
        'whatsappUsername',
        'whatsaapPassword',
        'whatsappAccountSid',
        'whatsappAuthToken',
        'whatsappNumber',
        'accountIsActive',
        'accountIsDeleted'
    ];

    // Disable timestamps for this model
    public $timestamps = false;
}
