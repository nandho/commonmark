<?php

namespace App\Http\Middleware;

use App\Models\backoffice;
use App\Models\divisiModel;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Exceptions\UnauthorizedException;


class divisi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $divisi, $guard = null): Response
    {
        $authGuard = Auth::guard($guard);
        $user = $authGuard->user();
        //checking signin
        if (! $user) {
            throw UnauthorizedException::notLoggedIn();
        }

        $userId = $user->id;

        $backoffice = backoffice::where('id_akun', $userId)->first();

        $jabatan = divisiModel::where('id',$backoffice->jabatan)->first();

        if(! $jabatan == $divisi)
        {
            throw UnauthorizedException::notLoggedIn();
        }

        //getting role if backoffice

        return $next($request);
    }
}
