<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'city',
        'status',
        'faculty_id',
        'work_unit_id',
        'allotment_id',
        'message'
    ];

    public function donation_nominal()
    {
        return $this->hasMany(DonationNominal::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function work_unit()
    {
        return $this->belongsTo(WorkUnit::class);
    }

    public function allotment()
    {
        return $this->belongsTo(Allotment::class);
    }
}
