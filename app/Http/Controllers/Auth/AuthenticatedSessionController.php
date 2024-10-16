<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authentification de l'utilisateur
        $request->authenticate();

        // Régénérer la session pour éviter les attaques CSRF
        $request->session()->regenerate();

        // Auth::user()->last_login = now();
        // Auth::user()->save();
        
        // Vérifier le type d'utilisateur et rediriger en conséquence
        if (Auth::user()->usertype == 'admin') {
            // Redirection vers la page admin
            return redirect()->intended(route('adminpage'));
        }

        if (Auth::user()->usertype == 'user') {
            // Redirection vers la page d'accueil utilisateur
            return redirect()->intended(route('welcome'));
        }

        // Optionnel : Rediriger vers une page par défaut si le type n'est pas défini
        return redirect('/');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Déconnexion de l'utilisateur
        Auth::guard('web')->logout();

        // Invalidation de la session
        $request->session()->invalidate();

        // Régénérer le token CSRF
        $request->session()->regenerateToken();

        // Redirection vers la page d'accueil après déconnexion
        return redirect('/');
    }
}

