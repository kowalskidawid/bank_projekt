<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('login', $request->get('login'))->first();
        if (is_null($user)) {
            abort(403);
        }
        if (Hash::check($request->get('password'), $user->password)) {
            Auth::login($user);
        } else {
            abort(403);
        }
        return redirect()->route('home');
    }
}
