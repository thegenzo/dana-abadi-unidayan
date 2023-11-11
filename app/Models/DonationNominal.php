<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonationNominal extends Model
{
    use HasFactory;

    protected $fillable = [
        'donation_id',
        'amount',
        'method',
        'status'
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
