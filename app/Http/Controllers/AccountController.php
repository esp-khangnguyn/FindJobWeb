<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $user = Account::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect the user
        // return response()->json([
        //     'success' => true,
        // ]);
        session()->flash('success', 'Registration successful!');

        return redirect()->back();
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = Account::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            session()->flash('success', 'Login Success');
            return redirect()->back();
        }
        
        return redirect()->back();
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->back();
    }
}
?>