@extends('layouts.app')

@section('title - page', 'Home - Trains')

@section('main - content')
    <div class="mt-3">
        <h1 class="text-center"> Trains timetable</h1>
        <div class="container">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Numero treno</th>
                        <th scope="col">Destinazione</th>
                        <th scope="col">Data e orario di partenza</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trains as $elem)
                        <tr>
                            <td>{{ $elem->train_number }}</td>
                            <td>{{ $elem->destination }}</td>
                            <td>{{ $elem->departure_time }}</td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>


@endsection
