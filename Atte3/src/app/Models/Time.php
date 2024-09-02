<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'attend',
        'leave',
    ];
    protected $guarded = [
        'id',
    ];

    //1対谷多リレーション追加
    public function user() {
        return $this->belongsTo(User::class);
    }
}
