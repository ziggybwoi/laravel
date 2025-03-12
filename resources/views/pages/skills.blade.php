@extends('layouts.app')

@section('content')
    <h1>My Skills</h1>

    <ul>
        @foreach($skills as $row)
            <li>{{ $skill->name }} - Description: {{ $row->description }}</li>
        @endforeach
    </ul>
@endsection