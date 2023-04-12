@extends ('sommaireComptable')
@section('contenu1')


<div class="contenu">
    <h3>Fiche de frais à rembourser :</h3>
    <form method="POST" action="{{ route('chemin_rembourseFrais') }}">
        {{ csrf_field() }}
        <table>

            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Dernier modification</th>
            </tr>
            @foreach($listeFraisARembourser as $frais)
            <tr>
                <td> <input type="checkbox" name="lstARembourser[]" value="{{$frais['idVisiteur']}}" /></td>
                <td>
                    <label>{{$frais['nom']}}</label>
                </td>
                <td>
                    <label>{{$frais['prenom']}}</label>
                </td>
                <td>
                    <label>{{$frais['dateModif']}}</label>
                </td>
                <td>
                    <label>{{$frais['idVisiteur']}}</label>
                </td>
            </tr>
            @endforeach

        </table>
        <input type="submit" value="Enregistrer" />
    </form>
    @if($method == 'POST')
    <h3>Il y a {{count($lesFraisRembourser)}} fiche(s) de frais qui ont été remboursé(s) sont :</h3>
    @foreach($lesFraisRembourser as $frais)
    <label>{{$frais}}</label><br />
    @endforeach
    @endif
</div>
@endsection