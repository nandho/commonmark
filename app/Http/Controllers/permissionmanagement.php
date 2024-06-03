<?php

namespace App\Http\Controllers;

use App\Http\Resources\permissionResource;
use App\Models\permission as permissionModel;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class permissionmanagement extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:api','role:admin']);
    }

    public function index()
    {
        //will return all data
        $data = permissionModel::all();
        return new permissionResource(true, 'success', $data);
    }

    public function store(Request $request)
    {
        //will input permission
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
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
            $data = new permissionModel();
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new permissionResource(true, 'success', $data);
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
        //will return specified permission

        $data = permissionModel::find($id);

        if (!$data) {
            return new permissionResource(false, 'not found', null);
        }

        return new permissionResource(true, 'success', $data);
    }

    public function update(Request $request, $id)
    {
        // get data and update data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
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
            $data = permissionModel::findOrFail($id);
            $data->fill($requestData);

            // Simpan objek ke database
            $data->save();

            // Jika penyimpanan berhasil, kirim respons sukses
            return new permissionResource(true, 'success', $data);
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
        $data = permissionModel::findorfail($id);

        //delete post
        $data->delete();

        //return response
        return new permissionResource(true, 'Data Post Berhasil Dihapus!', null);
    }

    public function give_permission_into_role(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'data.*.permission' => 'required|array|string|exists:permissions,name',
            'data.*.role' => 'required|array|string|exists:role,name',
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
            //code...
            foreach ($datas as $data) {
                $role = Role::where('name', $data->role)->get();

                $role->givePermissionTo($data->permission);
            }
        } catch (\Exception $e) {
            return new permissionResource(false, 'gagal menambahkan permission error : ' . $e, null);
        }

        return new permissionResource(true, 'permission berhasil ditambahkan', $data->all()->id);
    }

    public function remove_permissions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'role' => 'required|exists:role,name',
            'permission' => 'required|exists:permissions,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan data',
                'error' => $validator->errors(),
            ], 400);
        }

        $role = $request->validated()->name;
        $permission = $request->validated()->permission;

        $user = Role::where('name', $role);
        $user->revokePermissionTo($permission);

        return new permissionResource(true, 'Role berhasil dihapus', null);
    }
}
