<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing2 extends Controller
{
    public function __construct(){
        $this->middleware('role:backoffice')->only('backoffice_can_access');
        $this->middleware('role:dosen')->only('dosen_can_access');
        $this->middleware('role:mahasiswa')->only('mahasiswa_can_access');
    }

    //testing authorization middleware
    // Metode ini hanya bisa diakses oleh 'backoffice'
    public function backoffice_can_access()
    {
        return "This is accessible to backoffice role.";
    }

    // Metode ini hanya bisa diakses oleh 'dosen'
    public function dosen_can_access()
    {
        return "This is accessible to dosen role.";
    }

    // Metode ini hanya bisa diakses oleh 'mahasiswa'
    public function mahasiswa_can_access()
    {
        return "This is accessible to mahasiswa role.";
    }
}
