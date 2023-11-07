<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkUnit extends Model
{
    use HasFactory;

    protected $fillable = ['unit_name'];

    public function donation()
    {
        return $this->hasMany(Donation::class);
    }
}
