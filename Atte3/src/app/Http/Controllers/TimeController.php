<?php

namespace App\Http\Controllers;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function create(Request $request){
        $date = $request->all();
        Time::create($date);
        return redirect('/');
    }
}
