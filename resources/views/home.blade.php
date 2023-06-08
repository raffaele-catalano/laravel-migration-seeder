@extends('layout.main')

@section('content')
    <div class="container">
        <h1 class="text-center my-3">{{ $title }}</h1>
        <p class="my-3">{{ $description }}</p>
    </div>
    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">Train Code</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Wagon</th>
                    <th scope="col">On Time</th>
                    <th scope="col">Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr class="text-center">
                        <th class="text-info" scope="row">{{ $train['train_code'] }}</th>
                        <td class="text-primary">{{ $train['company'] }}</td>
                        <td>{{ $train['departure_station'] }}</td>
                        <td>{{ $train['arrival_station'] }}</td>
                        <td>{{ $train['departure_time'] }}</td>
                        <td>{{ $train['arrival_time'] }}</td>
                        <td>{{ $train['wagon_number'] }}</td>
                        <td class="{{ $train['is_in_time'] === 0 ? 'text-danger' : 'text-success' }}">
                            {{ $train['on_time'] === 0 ? 'No' : 'Yes' }}</td>
                        <td class="{{ $train['is_cancelled'] === 0 ? 'text-danger' : 'text-success' }}">
                            {{ $train['deleted'] === 0 ? 'No' : 'Yes' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
