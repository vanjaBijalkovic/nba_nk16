<div>
    {{ $team->email }}
</div>
<div>
    {{ $team->address }}
</div>
<div>
    {{ $team->city }}
</div>
<div>
    {{ $team->name }}
</div>

<div>
    Players:
</div>
<div>
    @foreach($team->players as $player)
    <a href="/players/{{ $player->id }}">
        {{ $player->first_name }}
    </a>
    @endforeach 
</div>
