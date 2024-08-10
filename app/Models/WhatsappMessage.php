<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappMessage extends Model
{
    use HasFactory;

    protected $table = 'tblWhatsappMessages';
    protected $primaryKey = 'whatsappId';
    protected $fillable = [
        'whatsappMessage',
        'whatsappMessageSid',
        'whatsappMessageType',
        'whatsappContactId',
        'whatsappMessageDate'
    ];

    // Disable timestamps for this model
    public $timestamps = false;

    public function contact()
    {
        return $this->belongsTo(WhatsappContact::class, 'whatsappContactId');
    }

    public function media()
    {
        return $this->hasMany(WhatsappMedia::class, 'whatsappId');
    }
}