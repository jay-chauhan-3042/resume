<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappContact extends Model
{
    use HasFactory;

    protected $table = 'tblWhatsappContacts';
    protected $primaryKey = 'contactId';
    protected $fillable = [
        'contactNumber',
        'contactProfileName'
    ];

    // Disable timestamps for this model
    public $timestamps = false;

    public function messages()
    {
        return $this->hasMany(WhatsappMessage::class, 'whatsappContactId');
    }

    public static function createIfNotExists($contactNumber, $contactProfileName)
    {
        // Check if the contact already exists
        $existingContact = self::where('contactNumber', $contactNumber)->first();

        if ($existingContact) {
            return $existingContact;
        }

        // Create a new contact
        return self::create([
            'contactNumber' => $contactNumber,
            'contactProfileName' => $contactProfileName,
        ]);
    }
}