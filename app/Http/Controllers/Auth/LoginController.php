<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth; // Correct import of the Auth facade

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Display the login form
    }

    public function login(Request $request)
    {
        // Validate the incoming request
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to login the user with the provided credentials
        if (!Auth::attempt($attributes)) {
            // If authentication fails, throw a validation exception with error messages
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
                'password' => 'Your provided credentials could not be verified.',
            ]);
        }

        // Regenerate the session token to prevent session fixation attacks
        $request->session()->regenerate();

        // Redirect the user to the intended page (or welcome page)
        return redirect()->route('dashboard'); // Ensure the 'welcome' route exists
    }

    //       public function logout(Request $request)
    //   {
    //       Auth::logout();

    //       $request->session()->invalidate();
    //       $request->session()->regenerateToken();

    //       return redirect()->route('login');
    //   }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
