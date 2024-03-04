<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login', 'register', 'postRegister', 'postLogin']]);
    }

    public function login()
    {
        return view('auth.login');          // GET
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->has('remember'))) {
            return back()->with('error', 'Invalid email or password');
        }

        return redirect()->route('home');
    }

    public function register()
    {
        $roles = Role::all();
        return view('auth.register', compact('roles'));       // GET
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:8',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|integer|exists:roles,id'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // Assign default role to the user
        $user->role()->attach($request->role_id);
        // $user->permissions()->sync([1, 2, 3, 4, 5]);

        auth()->login($user);

        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
