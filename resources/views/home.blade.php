@extends('layouts.app')

@section('content')
    <h1>Lista biglietti treni</h1>

    @foreach ($trains as $train)
        <div class="row">
            @include('./partials/ticket_train')
        </div>
    @endforeach
@endsection
