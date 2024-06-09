<?php

namespace App\Http\Controllers;

use App\Http\Resources\RoleResource;
use App\Models\Role as RoleModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class rolemanagement extends Controller
{

    public function __construct(){

    }

    public function index()
    {
        //will return all data
        $data = RoleModel::all();
        return new RoleResource(true,'success',$data);
    }

    public function store(Request $request)
    {
        //will input Role
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'guard_name' => 'required|in:api,web',
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
            $data = new RoleModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new RoleResource(true, 'success', $data);
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
        //will return specified Role

        $data = RoleModel::find($id);

        if (!$data) {
            return new RoleResource(false, 'not found', null);
        }

        return new RoleResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'guard_name' => 'required|in:api,web',
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
            $data = RoleModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new RoleResource(true, 'success', $data);
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
        $data = RoleModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new RoleResource(true, 'Data Post Berhasil Dihapus!', null);
    }

    public function role_assigner(Request $request)
    {
        //mendapatkan array id dari request
        $validator = Validator::make($request->all(),[
            'data.*.id' => 'required',
            'data.*.guard_names' => 'required|in:api,web',
            'data.*.role' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $datas = $request->validated();

        try {
            foreach($datas as $data){
                $id_user = $data->id;
                $user = User::findOrFail($id_user);
                $user->assignRole($data->role);
            }
        } catch (Exception $e){
            return new RoleResource(false, 'Role gagal untuk di tambahkan dengan error: '.$e, null);
        }


        return new RoleResource(true, 'Role berhasil ditambahkan', $data->all()->id);
    }

    public function role_deassigner(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id'=>'required|exists:user,id',
            'role'=>'required|exists:role,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $id = $request->validated()->id;
        $role = $request->validated()->role;

        $user = User::findOrFail($id);
        $user->removeRole($role);

        return new RoleResource(true, 'Role berhasil dihapus', null);
    }
}
