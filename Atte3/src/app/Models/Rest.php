<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rest extends Model
{
    use HasFactory;

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

protected $fillable = ['time_id', 'break', 'break_end', 'created_at', 'updated_at'];
}
