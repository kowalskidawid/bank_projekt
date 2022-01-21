<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number'
    ];

    public static function generateAccountNumber()
    {
        $number = [random_int(10, 99)];
        for ($i = 0; $i < 6; $i++) {
            $number[] = random_int(1000, 9999);
        }
        return implode(' ', $number);
    }
}
