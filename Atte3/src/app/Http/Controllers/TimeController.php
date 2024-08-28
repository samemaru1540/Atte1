<?php

namespace App\Http\Controllers;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function create(Request $request){
        $userId = Auth::id();
        $form = $request->all();
        Time::create($form);
        return redirect('/');
    }

    public function index()
    {
        $times = Time::all();
        return view('index', ['times' => $times]);
    }
}
