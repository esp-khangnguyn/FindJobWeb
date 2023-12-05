<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    public function index()
    {
        $email = auth()->user()->email;
        if (Auth::check()) {
            if (auth()->user()->role == 'employer') {
                $userProfile = auth()->user()->employer;
                return view('profile.employer', ['userProfile' => $userProfile, 'email' => $email]);
            }
            $userProfile = auth()->user()->user;
            return view('profile.user', ['userProfile' => $userProfile, 'email' => $email]);

        }
        return redirect()->back();
    }
    public function employer(Request $request)
    {

    }
    public function user()
    {

    }
}
