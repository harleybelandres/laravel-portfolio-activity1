@extends('layout')
@section('title', 'Hobbies')
@section('content')

<h1><i class="fas fa-heart"></i> My Hobbies</h1>
<ul style="margin-top: 2rem; font-size: 1.1rem; line-height: 1.6;">
    @foreach ($hobbies as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
</ul>
@endsection
