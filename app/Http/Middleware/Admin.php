<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier si l'utilisateur est connecté
        if (Auth::check() && Auth::user()->usertype == 'admin') {
            return $next($request);  // Si l'utilisateur est admin, continuer
        }

        // Si l'utilisateur n'est pas connecté ou n'est pas admin
        abort(401, 'Non autorisé');  // Erreur 401 : accès non autorisé
    }
}
