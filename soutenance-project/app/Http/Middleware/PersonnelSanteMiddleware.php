<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonnelSanteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    /*public function handle(Request $request, Closure $next)
    {
        // Vérifiez si l'utilisateur est authentifié et si son type est "personnel de santé"
        if ($request->user() && $request->user()->type === 'personnel_sante') {
            return $next($request);
        }

        // Redirigez l'utilisateur vers la page d'accueil ou affichez un message d'erreur
        return redirect('/')->with('error', 'Accès non autorisé.');
    }*/
}
