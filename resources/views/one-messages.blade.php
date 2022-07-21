@extends('layouts.app')

@section('title-block')
{{ $data->subject }}
@endsection

@section('content')
    <h1 class="mt-2 mb-2 pt-2 pb-2">{{ $data->subject }}</h1>

    <div class="alert alert-info">
        {{-- <h3>{{ $el->subject }}</h3> --}}
        <p> {{ $data->message }}</p>
        <p> {{$data->name }} - {{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="{{ route('contact-update', $data->id) }}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Delete</button></a>
    </div>

@endsection