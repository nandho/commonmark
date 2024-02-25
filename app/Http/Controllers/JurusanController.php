<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        //will return all data
    }

    public function store(Request $request)
    {
        //will input jurusan
    }

    public function show($id)
    {
        //will return specified jurusan
    }

    public function update(Request $request, $id)
    {
        // get data and update data
    }

    public function destroy($id)
    {
        //will delete data
    }
}
