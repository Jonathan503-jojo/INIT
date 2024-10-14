@if ($lastLogin)
    <p>Dernière connexion : {{ $lastLogin->format('d/m/Y H:i:s') }}</p>
@else
    <p>C'est votre première connexion !</p>
@endif
