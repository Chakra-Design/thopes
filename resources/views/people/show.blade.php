@extends('layout')
@section('content')
    <h1>{{$new_person ->name}}</h1>
    <form method="post" action="/people/{{$new_person->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="/people/{{$new_person->id}}/edit">Edit</a>
@endsection