@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')

    <h1>welcome {{$var}}</h1>
    @foreach($tasks as $task)

        <li>
            {{ $task }}

        </li>
           

    @endforeach




@endsection
