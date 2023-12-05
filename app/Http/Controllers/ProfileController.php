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
        if (!Auth::check()) {
            return abort(404);
        }
        
        $email = auth()->user()->email;
        if (auth()->user()->role == 'employer') {
            $userProfile = auth()->user()->employer;
            return view('profile.employer', ['userProfile' => $userProfile, 'email' => $email]);
        }
    
        $userProfile = auth()->user()->user;
        return view('profile.user', ['userProfile' => $userProfile, 'email' => $email]);
    }
    public function employer(Request $request)
    {
        $employerID = auth()->user()->employer->id;
        $employer = Employer::find($employerID);

        $employer->location = $request->location;
        $employer->working_time = $request->workingTime;
        $employer->introduce = $request->introduce;
        $employer->own_project = $request->ownProject;
        $employer->prize = $request->prize;

        $employer->save();
        session()->flash('success', 'Cập nhật thông tin thành công');
        return redirect()->route('profile');
    }
    public function user(Request $request)
    {
        $userID = auth()->user()->user->id;
        $user = User::find($userID);

        $user->name = $request->name;
        $user->introduce = $request->introduce;
        $user->education = $request->education;
        $user->experience = $request->experience;
        $user->skill = $request->skill;
        $user->own_project = $request->ownProject;
        $user->certificate = $request->certificate;
        $user->prize = $request->prize;

        $user->save();
        session()->flash('success', 'Cập nhật thông tin thành công');
        return redirect()->route('profile');
    }
}
