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
    public function handle(object $event) 
    {
        // Met à jour la colonne last_login avec l'heure actuelle
        $event->user->last_login = now();
        $event->user->save();
        
    }
}
