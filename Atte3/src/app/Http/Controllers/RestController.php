<?php

namespace App\Http\Controllers;
use App\Models\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    public function create(Request $request){
        $date = $request->all();
        Rest::create($date);
        return redirect('/');
    }
}
