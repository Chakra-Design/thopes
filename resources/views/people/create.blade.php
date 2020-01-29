@extends('layout')
@section('content')
    <div class="container">
        <form method="post" action="/people" class="mt-5 mb-5">
@csrf
            {{--name--}}
            {{--designation--}}
            {{--profile_link--}}
            {{--imagepath--}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" id="designation" name="designation" class="form-control">
            </div>

            <div class="form-group">
                <label for="profile_link">Profile Link</label>
                <input type="text" id="profile_link" name="profile_link" class="form-control">
            </div>

            <div class="form-group">
                <label for="imagepath">Image</label>
                <input type="text" id="imagepath" name="imagepath" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

