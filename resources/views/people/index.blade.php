@extends('layout')
@section('content')
    <a href="/people/create">Create a new person</a>
<ul>
    @foreach($data as $new_person)
    <li>
        <a href="/people/{{$new_person->id}}">{{ $new_person->name }}</a>
    </li>
    @endforeach
</ul>