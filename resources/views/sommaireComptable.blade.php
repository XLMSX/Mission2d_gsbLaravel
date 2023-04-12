@extends ('modeles/visiteur')
@section('menu')
<!-- Division pour le sommaire -->
<div id="menuGauche">
    <div id="infosUtil">

    </div>
    <ul id="menuList">
        <li>
            <strong>Bonjour {{ $comptable['nom'] . ' ' . $comptable['prenom'] }}</strong>
        </li>
        <li class="smenu">
            <a href="{{ route('chemin_fraisARembourser') }}" title=" remboursement">Fiches à rembourser</a>
        </li>
        <li class="smenu">
            <a href="{{ route('chemin_deconnexion') }}" title=" Se déconnecter">Déconnexion</a>
        </li>
    </ul>

</div>
@endsection