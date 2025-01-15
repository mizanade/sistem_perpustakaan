<?php

namespace App\Models;

use App\Enums\FinePaymentStatus;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $fillable = [
        'return_book_id',
        'user_id',
        'late_fee',
        'other_fee',
        'total_fee',
        'fine_date',
        'payment_status',
    ];

    protected function casts(): array
    {
        return [
            'payment_status' => FinePaymentStatus::class,
            'fine_date' => 'date'
        ];
    }
}
