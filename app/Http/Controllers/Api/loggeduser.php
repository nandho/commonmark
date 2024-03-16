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
        $id_user = $user->id;
        $role_user = $user->role;
        $data['user'] = $user;

        switch ($role_user) {
            case 'mahasiswa':
                $mahasiswa = Mahasiswa::find('id_akun', $id_user);
                $data['data'] = $mahasiswa;
                break;
            case 'calonmahasiswa':
                $pmb = PmbModel::find('id_akun', $id_user);
                $data['data'] = $pmb;
                break;
            case 'dosen':
                $dosen = DosenModel::find('id_akun', $id_user);
                $data['data'] = $dosen;
                break;
            case 'backoffice':
                $backoffice = backoffice::find('id_akun', $id_user);
                $data['data'] = $backoffice;
                break;
            case 'admin':
                // $backoffice = backoffice::find('id_akun',$id_user);  
                $data['data'] = 'u r admin';
                break;
            default:
                return response()->json(['message' => 'unauthorized'], 401);
                break;
        }
        return new ResourcesLoggeduser('success', 'data berhasil di dapatkan', $data);
        // return response()->json($data,200); // can use json resource
    }
}
