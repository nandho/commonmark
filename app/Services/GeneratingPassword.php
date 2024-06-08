<?php

namespace App\Services;

class GeneratingPassword
{
        /**
     * Generate a unique registration number.
     *
     * @return string
     */
    public static function generate($length = 8)
    {
        // Daftar karakter yang mungkin digunakan dalam kata sandi
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    
        // Menghitung panjang daftar karakter
        $charactersLength = strlen($characters);
    
        // Variabel untuk menyimpan kata sandi yang dihasilkan
        $randomPassword = '';
    
        // Menghasilkan karakter acak untuk setiap posisi dalam kata sandi
        for ($i = 0; $i < $length; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
    
        return $randomPassword;
    }
}
