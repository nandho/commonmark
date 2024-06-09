<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'username'  => 'required|unique:users',
            'email'     => 'required|email',
            'password'  => 'required|min:8|confirmed',
            'role'      => 'required|in:admin,backoffice,dosen,mahasiswa,calonmahasiswa',
        ]);

        //if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        //if calon mahasiswa baru create password random dan kirim ke email

        //create user
        try {
            $user = User::create([
                'username'      => $request->username,
                'email'         => $request->email,
                'password'      => bcrypt($request->password),
                // 'role'          => $request->role,
            ]);

            //assign role
            switch ($request->role) {
                case 'admin':
                    # code...
                    break;
                case 'backoffice':
                    # code...
                    break;
                case 'mahasiswa':
                    # code...
                    break;
                case 'calonmahasiswa':
                    # code...
                    break;
                case 'dosen':
                    # code...
                    break;
                default:
                    echo("unable to add role");
                    break;
            }
        } catch (\Throwable $th) {
            return response()->json('bad request',400);
        }

        //return response JSON user is created
        if($user) {
            return response()->json([
                'success' => true,
                'user'    => $user,
            ], 201);
        }

        //return JSON process insert failed
        return response()->json([
            'success' => false,
        ], 409);
    }
}
