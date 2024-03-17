<?php

namespace Tests\Feature;

use App\Models\backoffice;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class testuuid extends TestCase
{
    public function testecreatebackoffice()
    {
        $backoffice = new backoffice();
        $backoffice->nama_lengkap = "arif sutriyono";
        $backoffice->jabatan = "Dev";
        $backoffice->nip = "123456789";
        $backoffice->email = "sutriyono@nameless.com";
        $backoffice->no_hp = "123456789";
        // add user back office
        $user = new User();
        $user->username="stryn";
        $user->password="12345678";
        $user->email="sutriyono@nameless.com";
        $user->role="backoffice";
        $user->save();
        $backoffice->id_akun=$user->id;
        $backoffice->save();

        echo($backoffice->id);
        
        self::assertNotNull($backoffice->id);
    }

}
