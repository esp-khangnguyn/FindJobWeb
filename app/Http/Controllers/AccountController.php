<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'username' => 'required|unique:account',
            'email' => 'required|email|unique:account',
            'password' => 'required|confirmed',
            'terms' => 'accepted',
        ], [
            'username.required' => 'The username field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.confirmed' => 'The password confirmation does not match.',
            'terms.accepted' => 'You must accept the terms and conditions.',
        ]);

        // Create a new user and save it to the database
        $user = User::create();
        $account = Account::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'userID' => $user->id,
        ]);

        // Log the user in
        auth()->login($account);

        session()->flash('success', 'Registration successful!');

        return redirect()->back();
    }
    public function employer(Request $request)
    {
        session()->flash('employerFormSubmitted', true);

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:account',
            'location' => 'required',
            'username' => 'required|unique:account',
            'password' => 'required',

        ], [
            'name.required' => 'The name field is required.',
            'phone.required' => 'The phone field is required.',
            'location.required' => 'The location field is required.',
            'username.required' => 'The username field is required.',
            'username.unique' => 'The username has already been taken.',
            'email.required' => 'The email field is required.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.'
        ]);

        $employer = Employer::create([
            'name' => $request->name,
            'location' => $request->location,
        ]);

        $account = Account::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'employer',
            'employerID' => $employer->id,
        ]);

        auth()->login($account);

        session()->flash('success', 'Registration successful!');

        return redirect()->back();
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = Account::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->flash('success', 'Login Success');
            return redirect()->back();
        }
        session()->flash('fail', 'Wrong email or password');
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
}
?>