@extends('layouts.app')

@section('content')
    <h1>Welcome to my Portfolio</h1>

    <ul>
        @foreach($home as $row)
            <li>{{ $row->name }} - Age: {{ $row->age }}</li>
        @endforeach
    </ul>
@endsection