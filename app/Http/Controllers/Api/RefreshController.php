<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'user' => auth()->guard('api')->user(),
            'authorisation' => [
                'token' => auth()->guard('api')->refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
