@extends('layout.app')


@section('print')
    <h1>Today trains</h1>
    @foreach ($trains as $train)
        <p>{{ $train->company_name }}</p>
        <p>From {{ $train->starting_station }} to {{ $train->arriving_station }}</p>
        <p>Departs at {{ $train->starting_hour }} Arrives at {{ $train->arriving_hour }}</p>
        <p>Day {{ $train->train_date }}</p>
    @endforeach
@endsection
