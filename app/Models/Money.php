<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    protected $table = 'tblMoney';
    protected $primaryKey = 'moneyId';
    protected $fillable = [
        'moneyTransectionId',
        'moneyTitle',
        'moneyAmount',
        'moneyType',
        'moneyBankId',
        'moneyDate',
    ];

    // Disable timestamps for this model
    public $timestamps = false;

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'moneyBankId', 'bankId');
    }
}
