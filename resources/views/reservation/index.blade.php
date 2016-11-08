@extends ('layouts.dashboard')
@section('page_heading', "Gestion de reservation")

@section('section')

<div class="col-sm-12">
        <H2>Liste des réservations</H2>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gamme</th>
                    <th>Client</th>
                    <th>Date</th>
                    <th>Date de debut</th>
                    <th>Date de fin</th>
                    <th>Adresse de départ</th>
                    <th>Adresse d'arrivée</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reservations as $reservation) 
                <tr>
                  <td>{{$reservation->get('range')->fetch()->get('name')}}</td>
                  <td>{{$reservation->get('user')->fetch()->get('username')}}</td>
                  <td>{{$reservation->get('date') != null ?$reservation->get('date')->format('Y-m-d H:i'):"---"}}</td>
                  <td>{{$reservation->get('start_date') != null?$reservation->get('start_date')->format('Y-m-d H:i'):"--"}}</td>
                  <td>{{$reservation->get('end_date') != null ?$reservation->get('end_date')->format('Y-m-d H:i'):"--"}}</td>
                  <td>{{$reservation->get('from_adr')->fetch()->get('name')}}</td>
                  <td>{{$reservation->get('to_adr')->fetch()->get('name')}}</td>
                  <td>{{$reservation->get('price')}}</td>
                  <td><a href="/reservation/{{ $reservation->getObjectId() }}/destroy"> editer</a></td> 
                  <td><a href="/reservation/{{ $reservation->getObjectId() }}/destroy" >supprimer</a></td> 
                </tr>
             @endforeach
             
         </tbody>           
        </table>
        </div>
        <div class="col-sm-4">
         <a href="reservation/create">Ajouter Nouvelle Réservation</a>
        </div>
    </div>
@stop