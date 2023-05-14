<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $role=Role::all();
        return view('auth.register',['role'=>$role]);    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
         $hospital_id=auth()->user()->hospital_type_id;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'hospital_type_id' => $hospital_id,
            'status' => "active",
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        // $user_id=$request->id;
        // if($request->role=="2"){
        //     return view('AdminPanel.doctorProfile',compact("user_id"));
        // }

        // Auth::login($user);

        return redirect('register')->with('message', 'Successfully User Create');
    }
    public function grukulLogin(){
        return view('auth.gurukulLogin');
    }
    public function FoaLogin(){
        return view('auth.FoaLogin');
    }
}
