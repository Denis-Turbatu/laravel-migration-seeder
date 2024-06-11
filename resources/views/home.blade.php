@extends('layouts.app')

@section('content')
    <h1>Lista treni</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione partenza</th>
                <th scope="col">Stazione arrivo</th>
                <th scope="col">Orario partenza</th>
                <th scope="col">Orario arrivo</th>
                <th scope="col">Codice Treno</th>
                <th scope="col">Numero Carrozze</th>
                <th scope="col">Numero Posti</th>
                <th scope="col">Prezzo biglietto</th>
                <th scope="col">È in orario</th>
                <th scope="col">Cancellato</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($trains as $train)
                <tr>
                    <th scope="row">
                        {{$train->id}}
                    </th>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td>{{$train->carriage_number}}</td>
                    <td>{{$train->seats_number}}</td>
                    <td>{{$train->price_ticket}}</td>
                    <td>{{ $train->on_time === 1 ? 'Sì' : 'No' }}</td>
                    <td>{{ $train->cancelled === 1 ? 'Sì' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
