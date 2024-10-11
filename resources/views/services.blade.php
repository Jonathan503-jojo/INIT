@extends('base')

@Section('content')
    <div class="ha">
        <div class="text-image-container-1">
            <!-- Texte à gauche -->
            <div class="text-content">
                <h2>Service en piste</h2>
                <P>Avec l'aide de plusieurs équipements de piste, nous traitons plusieurs typesd'avions allant du Twin Otter au B747 passenger, ainsi que les avions cargo.

                    Selon la durée du transit ainsi que votre programme des vols, et dans les normesde Sécurité et de Sûreté, nous effectuons le Load control, Weight and Balance, Flight Dispatch, le chargement/déchargement/litiges bagages, les opérations enpiste, la vérification des conteneurs/palettes (ULD),...
                    
                    Nous disposons également d'un bureau côté piste pour les briefings des membresd'équipage.Nous sommes certifiés sur les principaux DCS tels que Amadeus Altea ©, Sabre ©,Troya ©. Mais nous effectuons également le traitement manuel si nécessaire.</P>
                <a href="{{ url('/services-en-pistes')}}">Voir plus</a>
        
            </div>
            <!-- Image à droite -->
            <div class="image-content">
                <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
            </div>
        </div>

        <div class="text-image-container-1">
            <!-- Texte à gauche -->
            <div class="text-content">
                <h2>Service aux passagers</h2>
                <P>La Satisfaction de nos Clients est au coeur de notre activité.Notre équipe qualifiée a le plaisir de vous fournir une agréable expérienceautant pour vos passagersque pour vos membres d'équipage, en facilitant tout le processus de traitement àl'arrivée, comme au départ et durant les transit.

                    Nous proposons également la vente de billets et la taxation d'excédents debagages à l'aéroport.
                    
                    Une assistance spécifique est fournie aux passagers ayant des besoins spécifiquestels que des chaises roulantes,informations spécifiques, Meet-And-Assist. Nous sommes certifiés sur lesprincipaux DCS tels que Amadeus Altea ©,Sabre ©, Troya ©, ainsi que manuellement si nécessaire. Nous pouvons également vous fournir un traitement automatiséde votre vol à travers le système Altea.</P>
                <a href="{{ url('/services-bagages')}}">Voir plus</a>
        
            </div>
            <!-- Image à droite -->
            <div class="image-content">
                <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
            </div>
        </div>

        <div class="text-image-container-1">
            <!-- Texte à gauche -->
            <div class="text-content">
                <h2>Service Bagages</h2>
                <P>Nous disposons d'un Service Litige Bagages à l'aéroport et sommes certifiés sur SITA WorldTracer ©.</P>
                <a href="{{ url('/services-bagages')}}">Voir plus</a>
        
            </div>
            <!-- Image à droite -->
            <div class="image-content">
                <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
            </div>
        </div>

        <div class="text-image-container-1">
            <!-- Texte à gauche -->
            <div class="text-content">
                <h2>Services cargo</h2>
                <P>Notre équipe expérimentée et qualifiée se chargera de votre Fret dans les normesde qualité, sécurité et sureté requises. Nous fournissons les services Fret allant de la piste, passant par l'écorage, lestockage, jusqu'à la livraison au destinataire. En ce qui concerne l'exportation, nous fournissons également les services devente, l'acceptation, la palettisation,et le chargement à l'avion. Un Service Litige Cargo est également à votredisposition. Une communicationpermanente entre nos équipes se chargeant du Cargo et les coordinateurs des volssur la piste assure un traitement sûr etfluide de votre vol. Le tout en respectant le temps d'escale.</P>
                <a href="{{ url('/services-cargo')}}">Voir plus</a>
        
            </div>
            <!-- Image à droite -->
            <div class="image-content">
                <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
            </div>
        </div>

        <div class="text-image-container-1">
            <!-- Texte à gauche -->
            <div class="text-content">
                <h2>Services VIP</h2>
                <P>Notre VIP lounge, muni d'un service snack offert, permettra à vos passagers de se détendre avant le vol.</P>
                <a href="{{ url('/services-vip')}}">Voir plus</a>
        
            </div>
            <!-- Image à droite -->
            <div class="image-content">
                <img src="{{ asset('img/services/Service passagers.jpg') }}" alt="services-passagers">
            </div>
        </div>

        
    </div>
 
@endsection