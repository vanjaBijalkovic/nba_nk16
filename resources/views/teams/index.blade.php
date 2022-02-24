@foreach($teams as $team) 
<a href="/teams/{{ $team->id }}">
    {{ $team->name }}
</a>
@endforeach