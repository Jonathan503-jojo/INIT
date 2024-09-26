@extends('base')

@Section('content')
<div class="text-image-container">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h2>SERVICES AUX PASSAGERS</h2>
        <li class="liste">
            <ul>Vérification des documents</ul>
            <ul>Passenger screening</ul>
        </li>

    </div>

    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

 
@endsection