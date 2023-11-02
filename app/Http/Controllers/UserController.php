<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Instantiate a new LoginRegisterController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'username' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
            ->withSuccess('You have successfully registered & logged in!');
    }

    public function edit(Request $request)
    {
        $isValid = $request->validate([
            'name' => 'required|string|max:250',
            'username' => 'required|string',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8'
        ]);
        if ($isValid) {
            $user = Auth::user()->id;
            if ($request->input('name')) {
                $user->name = $request->input('name');
            }
            if ($request->input('username')) {
                $isUsernameAvailable = User::findOrFail($request->input('username'));
                if ($isUsernameAvailable) {
                    return back()->withErrors([
                        'username' => 'Username is already exists, please use another username!',
                    ])->onlyInput('username');
                }
                $user->username = $request->input('username');
            }
            if ($request->input('password')) {
                $user->password = $request->input('password');
            }

            if ($request->input('email')) {
                $isUsernameAvailable = User::findOrFail($request->input('email'));
                if ($isUsernameAvailable) {
                    return back()->withErrors([
                        'email' => 'Email is already available in our database, please use another email!',
                    ])->onlyInput('email');
                }
            }
            $user->save();
        } else {
            return back()->withErrors([
                'error' => 'Please re-check your update!'
            ]);
        }

        return back();
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('/booking')
                ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'username' => 'Your provided credentials do not match in our records.',
            'password' => 'Wrong password!'
        ]);
    }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    }
}
