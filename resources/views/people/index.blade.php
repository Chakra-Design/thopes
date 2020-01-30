@extends('layout')
@section('content')
<ul>
    @foreach($data as $person)
    <li><a href="/people/{{new_person->id}}"{{ $new_person->name }}></a></li>
    @endforeach
</ul>