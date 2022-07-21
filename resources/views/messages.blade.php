@extends('layouts.app')

@section('title-block')
Messages!
@endsection

@section('content')
    <h1 class="mt-2 mb-2 pt-2 pb-2">All messages!</h1>

    @foreach ($data as $el)
        <div class="alert alert-info">
            <h4> {{ $el->name }}</h4> 
            <p> {{ $el->email }}</p>
            <h5>{{ $el->subject }}</h5>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $el->id) }}"><button class="btn btn-success">More details</button></a>
        </div>
    @endforeach

@endsection