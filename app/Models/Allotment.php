<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allotment extends Model
{
    use HasFactory;

    protected $fillable = ['allotment_name'];

    public function donation()
    {
        return $this->hasMany(Donation::class);
    }
}
