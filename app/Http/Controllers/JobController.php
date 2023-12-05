<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        if(!Auth::check()) return abort(404);
        if(auth()->user()->role == 'user') return abort(404);
        return view('create_job');
    }
}
