<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'tblVisitors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ip', 'browser', 'os', 'device', 'visitedDate',
    ];
    // Disable timestamps for this model
    public $timestamps = false;

    public static function createIfNotExists($visitorsDetails)
    {
        // Check if the contact already exists
        $existingVisitor = self::where('ip', $visitorsDetails["ip"])->first();

        if ($existingVisitor) {
            return $existingVisitor;
        }

        // Create a new contact
        return self::create($visitorsDetails);
    }
}
