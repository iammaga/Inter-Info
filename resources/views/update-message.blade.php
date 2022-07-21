@extends('layouts.app')

@section('title-block')
Update data
@endsection

@section('content')
    <h1 class="mt-2 mb-2 pt-2 pb-2">Update Data!</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eius corporis asperiores laboriosam deserunt eligendi natus, tempore earum voluptatibus quasi! In incidunt maxime laborum? Nulla cupiditate voluptatem est autem vel.</p>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">

        @csrf

        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="name" class="mb-2">Name</label>
            <input type="text" name="name" value="{{$data->name}}" id="name" placeholder="Name" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="email" class="mb-2">Email</label>
            <input type="text" name="email" value="{{$data->email}}" id="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="subject" class="mb-2">Messages theme</label>
            <input type="text" name="subject" value="{{$data->subject}}" id="subject" placeholder="Messages theme" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="message" class="mb-2">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message">{{$data->message}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection