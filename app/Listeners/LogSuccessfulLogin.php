<?php

namespace App\Listeners;



use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Login;

class LogSuccessfulLogin
{
    
     
    /**
     * Handle the event.
     */
    public function handle(Login $event) 
    {
        // Met à jour la colonne last_login avec l'heure actuelle
        $event->user->updateLastLoginAt();
        
    }
}
