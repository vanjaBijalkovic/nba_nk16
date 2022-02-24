<div>
    {{ $player->first_name }}
</div>
<div>
    {{ $player->last_name }}
</div>
<div>
    {{ $player->email }}
</div>

<a href="/teams/{{ $player->team->id }}">{{ $player->team->name }}</a>