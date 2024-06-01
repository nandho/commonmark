<?php

namespace App\Http\Controllers;

use App\Models\backoffice;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\BackOfficeResource;
use Illuminate\Support\Facades\Validator;

class BackofficeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','Role:admin','Role:Backoffice' => [
            'only' => [
                'update',
                'destroy'
                //.... dilakukan untuk membatasi akses
            ]
        ]]);

    }
    public function index()
    {
        $data = backoffice::all();
        return new BackOfficeResource(true, 'success', $data);
    }
    public function store(Request $request)
    {
        //will input jurusan
        $validator = Validator::make($request->all(),[
            'nama_lengkap'=>'required|string',
            'jabatan'=>'required|string|in:pmb,keuangan,akademik', //bisa menggunakan divisi, ini akan digunakan untuk teams on permission
            'nip'=>'required|string',
            'email'=>'required|email',
            'no_hp'=>'required|string',
            'password'=>'required|string|min:8' //getting password from user input
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {
            //membuat user sebelum data di assign ke backoffice
            $user = User::create([
                'username'=>$request->nip,
                'email'=>$request->email,
                'password'=>bcrypt($request->password)
            ]);

            if($request->jabatan == 'admin'){
                $user->assignRole('admin');
            }

            if($request->jabatan == 'pmb'){
                $user->assignRole('pmb');
            }
            if($request->jabatan == 'akademik'){
                $user->assignRole('akademik');
            }
            if($request->jabatan == 'keuangan'){
                $user->assignRole('keuangan');
            }

            $requestData['id_akun'] = $user->id;
            // Buat objek PmbModel baru dengan data dari request
            $data = new backoffice();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new BackOfficeResource(true, 'success', $data);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        //will return specified jurusan

        $data = backoffice::find($id);

        if (!$data) {
            return new BackOfficeResource(false, 'not found', null);
        }

        return new BackOfficeResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'nama_lengkap'=>'required|string',
            'jabatan'=>'required|string', //bisa menggunakan divisi, ini akan digunakan untuk role on permission
            'nip'=>'required|string',
            'email'=>'required|email',
            'no_hp'=>'required|string',
            'password'=>'required|string|min:8' //getting password from user input
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $requestData = $request->all();

        try {
            // Buat objek PmbModel baru dengan data dari request
            $data = backoffice::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new BackOfficeResource(true, 'success', $data);
        } catch (\Exception $e) {
            // Jika terjadi kesalahan, kirim respons error
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        //will delete data
        $data = backoffice::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new BackOfficeResource(true, 'Data Post Berhasil Dihapus!', null);
    }
}
