@extends('layout')

@section('title', 'First one')

@section('content')


<h1>My {{$foo}} website</h1>

<ul>

    @foreach($tasks as $task)

        <li>{{ $task }}</li>

    @endforeach

</ul>


@endsection