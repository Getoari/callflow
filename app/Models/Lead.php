<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',

        'company',

        'email',
        'phone',

        'status',

        'score',
        'temperature',

        'opportunity_value',

        'last_contacted_at',

        'notes'
    ];

    protected $casts = [

        'last_contacted_at'=>'datetime',

        'opportunity_value'=>'decimal:2'

    ];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function getNameAttribute()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
