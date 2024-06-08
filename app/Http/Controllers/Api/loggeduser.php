<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\loggeduser as ResourcesLoggeduser;
use App\Models\backoffice;
use App\Models\DosenModel;
use App\Models\Mahasiswa;
use App\Models\PmbModel;
use Illuminate\Http\Request;

class loggeduser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();
        // $id_user = $user->id;
        $data['user'] = $user;
        // Retrieve roles associated with the user
        // $userRoles = $user->hasRole(); // Returns a collection of role names
        if ($user->hasRole('admin')) {
            $userRoles = 'admin';
        } else if ($user->hasRole('dosen')) {
            $userRoles = 'dosen';
        } else if ($user->hasRole('mahasiswa')) {
            $userRoles = 'mahasiswa';
        } else if ($user->hasRole('pmb')) {
            $userRoles = 'pmb';
        } else if ($user->hasRole('keuangan')) {
            $userRoles = 'keuangan';
        } else if ($user->hasRole('admisi')) {
            $userRoles = 'admisi';
        } else if ($user->hasRole('akademik')) {
            $userRoles = 'akademik';
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }
        $data['roles'] = $userRoles;
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        $data['data'] = $user;
        return new ResourcesLoggeduser(true, 'data berhasil di dapatkan', $data);
    }
}
