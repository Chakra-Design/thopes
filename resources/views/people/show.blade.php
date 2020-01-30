@extends('layout')
@section('content')
<ul>
    <li><a href="/people/{{$new_person->id}}"></a>
        <a href="/people/{{$new_person->name}}"></a>
    </li>    
</ul>



@endsection