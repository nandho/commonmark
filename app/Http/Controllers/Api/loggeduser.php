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
        $data['user'] = $user;
        // Retrieve roles associated with the user
        $userRoles = $user->hasRole(); // Returns a collection of role names
        $data['roles'] = $userRoles;
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'User not found'
            ], 404);
        }

        $data['data'] = $data;
        return new ResourcesLoggeduser(true, 'data berhasil di dapatkan', $data);
    }
}
