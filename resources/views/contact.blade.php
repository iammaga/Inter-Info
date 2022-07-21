@extends('layouts.app')

@section('title-block')
Contacts
@endsection

@section('content')
    <h1 class="mt-2 mb-2 pt-2 pb-2">Contact Page</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eius corporis asperiores laboriosam deserunt eligendi natus, tempore earum voluptatibus quasi! In incidunt maxime laborum? Nulla cupiditate voluptatem est autem vel.</p>

    <form action="{{ route('contact-form') }}" method="post">

        @csrf

        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="name" class="mb-2">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="email" class="mb-2">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="subject" class="mb-2">Messages theme</label>
            <input type="text" name="subject" id="subject" placeholder="Messages theme" class="form-control">
        </div>
        <div class="form-group mt-2 mb-2 pt-2 pb-2">
            <label for="message" class="mb-2">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection