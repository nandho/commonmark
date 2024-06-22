<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use App\Models\nilai;

class TestUserPermissionTest extends TestCase
{
    public function test_UserPermissionAdminTest(): void
    {
        $user = User::where('username','Admin')->firstOrFail();

        self::assertTrue(!is_null($user));
        // self::assertTrue($user->can("add", nilai::class));
        // self::assertTrue($user->can("show", nilai::class));
        // self::assertTrue($user->can("edit", nilai::class));
        // self::assertTrue($user->can("delete", nilai::class));
    }
}
