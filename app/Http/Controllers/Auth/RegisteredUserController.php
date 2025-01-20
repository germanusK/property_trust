<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    
    public function create_team_profile (Request $request) {
        $data['title'] = "Create New Team Profile";
        return view('auth.register_profile', $data);
    }

    public function store_team_profile(Request $request) {
        $request->validate(['email'=>'required|email', 'password'=>'required|min:6', 'confirm_password'=>'required|same:password']);
        if(Team::where('email', $request->username)->count() > 0){
            session()->flash('error', 'Email has already been used. Try something else');
            return back()->withInput();
        }
        $input = ['email'=>$request->email, 'password'=>Hash::make($request->password)];
        $profile = Team::create($input);
        auth('team')->login($profile);
        return redirect()->route('team.home');
    }
}
