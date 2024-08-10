<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'tblBank';
    protected $primaryKey = 'bankId';
    protected $fillable = [
        'bankName',
        'bankCustomerId',
        'bankDebitCard',
        'bankDebitCardCvv',
        'bankDebitCardExpirationDate',
        'bankDebitCardAtmPin',
        'bankCustomerName',
        'bankCustomerPhoneNumber',
        'bankCustomerEmail',
        'bankAccountNumber',
        'bankIfscCode',
        'bankNetBankingPassword',
        'bankMPin',
        'bankAccountBalance',
        'bankAccountType',
        'bankAccountStatus',
    ];

    // Disable timestamps for this model
    public $timestamps = false;

    public function money()
    {
        return $this->hasMany(Money::class, 'moneyBankId', 'bankId');
    }
}
