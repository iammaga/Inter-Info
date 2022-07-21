@foreach ($users as $user)
    <h1>name: {{$user->name}}</h1>
    <h3>email: {{$user->email}}</h3>
    <a href="/users/{{ $user->id }}">Show detailes...</a>
@endforeach