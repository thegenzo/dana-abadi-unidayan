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
        'message',
    ];

    public function donation_nominal()
    {
        return $this->hasOne(DonationNominal::class);
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

    public function getDonationPlaced()
    {
        $value = '';
        if($this->faculty_id != '') {
            $value = $this->faculty->faculty_name;
        } else if ($this->work_unit_id != '') {
            $value = $this->work_unit->work_unit_name;
        } else {
            $value = $this->allotment->allotment_name;
        }

        return $value;
    }
}
