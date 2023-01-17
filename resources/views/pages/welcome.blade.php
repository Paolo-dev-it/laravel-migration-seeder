@extends('layouts.app')

@section('title - page', 'Home - Trains')

@section('main - content')

    @foreach ($trains as $elem)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Numero treno</th>
                    <th scope="col">Destinazione</th>
                    <th scope="col">Orario di partenza</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>{{ $elem->train_number }}</td>
                    <td>{{ $elem->destination }}</td>
                    <td>{{ $elem->departure_time }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach

@endsection
