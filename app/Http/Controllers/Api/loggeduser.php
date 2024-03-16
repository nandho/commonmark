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
                $mahasiswa = Mahasiswa::where('id_akun', $id_user)->fisrt();
                if($mahasiswa) {
                    $data['data'] = $mahasiswa->toArray(); // Pastikan untuk mengonversi model ke array jika diperlukan
                } else {
                    // Jika tidak ada data ditemukan, Anda mungkin ingin menangani kasus ini
                    $data['data'] = null;
                }
                break;
            case 'calonmahasiswa':
                $pmb = PmbModel::where('id_akun', $id_user)->first(); // Ubah metode pencarian
                if($pmb) {
                    $data['data'] = $pmb->toArray(); // Pastikan untuk mengonversi model ke array jika diperlukan
                } else {
                    // Jika tidak ada data ditemukan, Anda mungkin ingin menangani kasus ini
                    $data['data'] = null;
                }
                break;
            case 'dosen':
                $dosen = DosenModel::where('id_akun', $id_user)->fisrt();
                if($dosen) {
                    $data['data'] = $dosen->toArray(); // Pastikan untuk mengonversi model ke array jika diperlukan
                } else {
                    // Jika tidak ada data ditemukan, Anda mungkin ingin menangani kasus ini
                    $data['data'] = null;
                }
                break;
            case 'backoffice':
                $backoffice = backoffice::where('id_akun', $id_user)->first();
                if($backoffice) {
                    $data['data'] = $backoffice->toArray(); // Pastikan untuk mengonversi model ke array jika diperlukan
                } else {
                    // Jika tidak ada data ditemukan, Anda mungkin ingin menangani kasus ini
                    $data['data'] = null;
                }
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
