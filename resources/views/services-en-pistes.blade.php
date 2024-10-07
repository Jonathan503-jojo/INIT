@extends('base')

@Section('content')
<div class="text-image-container-1">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>Déplacement d’aéronefs</h2>
        <p>MGH fournit des services de refoulement et de remorquage d’aéronefs dans 4 aéroports à Madagascar. Pour déplacer des avions de toutes tailles, notre personnel qualifié exploite plus de X tracteurs pushback d’une puissance allant jusqu’à X chevaux. Avec notre engagement à augmenter la part des équipements d’assistance au sol (GSE) électriques à au moins 55 % d’ici 2032, nous nous efforçons de réduire notre empreinte carbone globale et de rendre l’aviation mondiale plus verte.</p>

    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-2">
    <!-- Texte à droite -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>Load Control</h2>
        <p>Dans le cadre de notre portefeuille de services, nous proposons des services de contrôle de charge à quelque 70 compagnies aériennes clientes. Des unités dédiées avec des spécialistes hautement qualifiés créent des feuilles de charge pour différentes compagnies aériennes. Les équipes de contrôle de la charge calculent la masse et le centrage ainsi que le trim de chaque avion, ce qui permet aux équipages de conduite d’effectuer leur vol de manière sûre et efficace.</p>

    </div>
    <!-- Image à gauche -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-1">
    <!-- Texte à gauche -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>Poids et centrage</h2>
        <p>##</p>
    </div>
    <!-- Image à droite -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>

<div class="text-image-container-2">
    <!-- Texte à droite -->
    <div class="text-content">
        <h1>Services de sécurité</h1>
        <h2>Régulateur de vol</h2>
        <p>##</p>
    </div>
    <!-- Image à gauche -->
    <div class="image-content">
        <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
    </div>
</div>
 
@endsection