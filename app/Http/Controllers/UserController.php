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
        // $this->middleware('guest')->except([
        //     'logout', 'dashboard'
        // ]);
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
            'password' => 'required|min:8|confirmed',
            'address' => 'required|string'
        ]);


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'levelling' => 1,
            'Address' => $request->address
        ]);

        $credentials = $request->only('username', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('/')
            ->withSuccess('You have successfully registered & logged in!');
    }

    public function update(Request $request)
    {


        $user = Auth::user()->id;
        $user = User::find($user);
        if ($request->input('name')) {
            $user->name = $request->input('name');
        }
        if ($request->input('username')) {
            $isUsernameAvailable = User::find($request->input('username'));
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
            $isUsernameAvailable = User::find($request->input('email'));
            if ($isUsernameAvailable) {

                return back()->withErrors([
                    'email' => 'Email is already available in our database, please use another email!',
                ])->onlyInput('email');
            }
        }
        $user->save();

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
