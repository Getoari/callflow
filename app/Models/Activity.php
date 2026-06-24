<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

     protected $fillable = [
        'lead_id',
        'type',
        'notes'
    ];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
