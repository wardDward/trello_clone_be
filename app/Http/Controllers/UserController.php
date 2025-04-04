<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function checkEmail(Request $request)
    {
        $request->validate(["email" => 'required']);
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            throw ValidationException::withMessages([
                'email' => 'No Email Exists.'
            ]);
        }

        return $user;
    }
}
