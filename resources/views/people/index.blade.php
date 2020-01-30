@extends('layout')
@section('content')
<ul>
    @foreach($data as $new_person)
    <li>{{ $new_person->name }}></a></li>
    @endforeach
</ul>