<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function auth(Request $request)
    {

            $name = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', $name)->first();
            if (Hash::check($password, $user->password)) {
                $apiToken = base64_encode(Str::random(40));
                $user->update([
                    'remember_token' => $apiToken
                ]);

                return response()->json([
                    'message' => 'Login OK',
                    'data' => [
                        'user' => $user->only('name')
                    ],
                    'token' => $user->remember_token
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Login not work',
                ]);
            }
    }

}
