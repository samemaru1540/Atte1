<?php

namespace App\Http\Controllers;
use App\Models\Time;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests\TimeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    public function attend()
    {
        $user= Auth::user();

        $timestamp = Time::create([
            'user_id' => $user->id,
            'date' => Carbon::now()->toDateString(),
            'attend' => Carbon::now(),
        ]);
        return redirect('date')->with('success', 'おはようございます');
    }

    public function leave()
    {
        $user = Auth::user();
        $timestamp = Time::where('user_id', $user->id)->latest()->first();

        $timestamp ->update([
            'leave' => Carbon::now()
        ]);

        return redirect('date')->with('success', 'お疲れさまでした');
    }
}
