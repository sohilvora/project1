<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users_list', compact('users'));
    }
    public function register(Request $req)
    {
        $valid = $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:32',
            'mobile' => 'required|digits:10',
        ]);
        if ($valid) {
            // Save user to database
            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = $req->password;
            $user->mobile = $req->mobile;
            $user->save();

            if ($user->save()) {
                return redirect('/login')->with('success', 'User registered successfully');
            } else {
                return redirect('/register')->with('error', 'Failed to register user');
            }
        } else {
            return view('register', [
                'name' => $req->name,
                'email' => $req->email,
                'mobile' => $req->mobile
            ]);
        }
    }
    public function login(Request $req)
    {
        $valid = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:32',
        ]);
        if ($valid) {
            // Check user credentials

            $user = User::where('email', $req->email)->first();
            if ($user->email == $req->email && $user->password == $req->password) {
                // Store user data in session
                $req->session()->put(['email' => $user->email, 'user_id' => $user->id]);
                return redirect('/');
            } else {
                return redirect('/login')->with('error', 'Invalid credentials');
            }
        } else {
            return view('login', [
                'email' => $req->email
            ]);
        }
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users_list')->with('success', 'User deleted successfully');
    }
    public function logout(Request $req)
    {
        $req->session()->pull('email');
        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
