<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    // 全てのユーザーとその関連するタイムデータ、休憩データを取得
    $users = User::with(['times.rests'])->get();

    // ユーザーごとに必要な情報を計算
    $data = $users->map(function ($user) {
        return $user->times->map(function ($time) use ($user) {
            // 出勤から退勤までの合計時間を計算
            $workDuration = $time->attend->diffInMinutes($time->leave);

            // 休憩時間の合計を計算
            $totalBreak = $time->rests->sum(function ($rest) {
                return $rest->break->diffInMinutes($rest->break_end);
            });

            return [
                'name' => $user->name,
                'attend' => $time->attend,
                'leave' => $time->leave,
                'workDuration' => $workDuration,
                'totalBreak' => $totalBreak,
            ];
        });
    })->flatten(1);

    return view('index', compact('data'));
}
}
