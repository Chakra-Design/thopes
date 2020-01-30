@extends('layout')
@section('content')
<div class="container">
    <h1>update article</h1>
<form method="post" action="/people/{{$new_person->id}}" class="mt-5 mb-5">
@csrf
@method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value={{ $new_person->name }}  class="form-control">
        </div>

        <div class="form-group">
            <label for="designation">Designation</label>
            <input type="text" id="designation" name="designation" value={{ $new_person->designation }} class="form-control">
        </div>

        <div class="form-group">
            <label for="profile_link">Profile Link</label>
            <input type="text" id="profile_link" name="profile_link" value={{ $new_person->profile_link }} class="form-control">
        </div>

        <div class="form-group">
            <label for="imagepath">Image</label>
            <input type="text" id="imagepath" name="imagepath" value={{ $new_person->imagepath }}  class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>}}



@endsection

