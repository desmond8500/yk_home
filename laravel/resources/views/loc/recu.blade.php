@extends('loc.layout.layout')



@section('content')
<fieldset class='box-primary'>
  <div class='titre'>QUITTANCE DE LOYER</div>
  <div class='entete'>
    Momar DIAGNE <br>
    Tel: 77 647 27 35 <br>
    Cité Hilal, Km 8 BCCD <br>
  </div>

  <div>
    Reçu de M. <span class='g'>{{  $client['prenom'] }} {{  $client['nom'] }}</span>,
    la somme de {{ $client['prix'] }} Francs </span>
    au titre du paiement du loyer du logement sis au 180, cité Hilal, Km 8 Boulecard
    de la commune de Dakar. <br><br>

    <div class='periode'>
      Période du 01-{{ $today }} au 30-{{ $today }}</div>
    echo 01-{{ $mois }}-2018 au 30-{{ $mois }}-2018</div>

    <div class='periode'>
            Date de règlement: ".$date."
          </div>
  </fieldset>

@endsection
