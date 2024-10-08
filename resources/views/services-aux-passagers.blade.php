@extends('base')

@Section('content')

<div class="little-title">
    <center><h2>LES SERVICES AUX PASSAGERS</h2></center>
    <br><br><br><br><br>
    <img src="{{ asset('img/aeroport-de-paris.jpg') }}" alt="Image 1" class="pic-title" >
</div>


<div class="text-image-container-1">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>ENREGISTREMENT ET PORTE D'EMBARQUEMENT</h2>
        <P>##</P>

    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-2">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>MOBILITÉ DES PASSAGERS</h2>
        <P>##</P> 
    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>
<!-- eto eee -->
<div class="text-image-container-1">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>SERVICES AUX PASSAGERS</h2>
        <ul class="liste">
            <li>Vérification des documents</li>
            <li>Contrôle des passagers</li>
        </ul>

    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-2">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>OBJETS TROUVÉS</h2>
        <p>Si vous souhaitez suivre l’état de vos bagages retardés, veuillez contacter votre compagnie aérienne. Veuillez noter que le transporteur opérant peut différer de la compagnie aérienne auprès de laquelle vous avez acheté votre billet.

            Si vous avez déjà déposé une déclaration de retard de bagages à l’aéroport, veuillez utiliser les contacts qui vous ont été fournis.</p>

    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-1">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>AVIATION D'AFFAIRES</h2>
        <P>##</P>

    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

 
@endsection
