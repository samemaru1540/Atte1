<?php

namespace App\Http\Controllers;
use App\Models\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function create(Request $request){
        $form = $request->all();
        Rest::create($form);
        return redirect('/');
    }
    public function index()
    {
        $rests = Rest::all();
        return view('index', ['rests' => $rests]);
    }
}
