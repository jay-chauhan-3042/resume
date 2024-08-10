<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappMedia extends Model
{
    use HasFactory;

    protected $table = 'tblWhatsappMedia';
    protected $primaryKey = 'mediaId';
    protected $fillable = [
        'mediaType',
        'mediaContentType',
        'mediaUrl',
        'whatsappId'
    ];

    // Disable timestamps for this model
    public $timestamps = false;

    public function message()
    {
        return $this->belongsTo(WhatsappMessage::class, 'whatsappId');
    }
}