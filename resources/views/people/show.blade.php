@extends('layout')
@section('content')
{{-- <ul>
    <li><a href="/people/{{$Person->id}}"></a>
</ul> --}}

<h2>{{$new_person->name}}</h2>
<h2>{{$new_person->designation}}</h2>
<h2>{{$new_person->profile_link}}</h2>
<h2>{{$new_person->image_path}}</h2>


@endsection