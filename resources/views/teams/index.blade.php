<a href="/register">Register</a>
<a href="/logout">Logout</a>


@foreach($teams as $team) 
<a href="/teams/{{ $team->id }}">
    {{ $team->name }}
</a>
@endforeach