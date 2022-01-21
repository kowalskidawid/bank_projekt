<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'pesel', 'first_name', 'last_name', 'address', 'department_id', 'bank_account_id'
    ];

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class);
    }
}
