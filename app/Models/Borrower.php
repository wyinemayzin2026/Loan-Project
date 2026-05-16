<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = [
        'full_name',
        'nrc_number',
        'phone_number',
        'address',
        'date_of_birth',
        'gender',
        'email',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}
