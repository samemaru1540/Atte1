<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rest extends Model
{
    use HasFactory;

        protected $fillable = [
            'time_id',
            'break',
            'break_end',
            'created_at',
            'updated_at'
        ];

        protected $guarded = [
        'id',
    ];
}
