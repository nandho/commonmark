<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class test extends Controller
{
    public function index (){
        $filePath = 'data.json';

        // Membaca data dari file JSON menggunakan fasad Storage
        try {
            $jsonData = Storage::get($filePath);
            $data = json_decode($jsonData, true);

            // Mengembalikan data sebagai respons JSON
            return response()->json($data);
        } catch (\Exception $e) {
            // Mengembalikan respons error jika gagal membaca file JSON
            return response()->json(['error' => 'Failed to read data from data.json'], 500);
        }
    }
    
    public function store (Request $request){
        $data = $request->input('body');

        // Path file JSON yang akan ditulis
        $filePath = 'data.json';

        // Menulis data ke dalam file JSON menggunakan fasad Storage
        try {
            Storage::put($filePath, json_encode($data));
            return response()->json(['message' => 'Data has been written to data.json successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to write data to data.json'], 500);
        }
    }
}
