<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'username'  => 'required',
            'password'  => 'required|min:8'
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //get credentials from request
        $credentials = $request->only('username', 'password');

        //if auth failed
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Username atau Password Anda salah'
            ], 401);
        }

        $user = auth()->guard('api')->user();

        $getroles = $user->getRoleNames()->toArray();

        $customize_token = [
            'role' => $getroles,
            'user' => $user,
        ];

        $token = auth()->guard('api')->claims($customize_token)->attempt($credentials);

        //if auth success
        return response()->json([
            'success' => true,
            'email' => auth()->guard('api')->user()->email,
            'token' => $token,
            'username' => auth()->guard('api')->user()->username
        ], 200);
    }
}
