@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Game: {{ $game->away_team }} vs {{ $game->home_team }}</div>

                <div class="card-body">
                   @foreach ($events as $event)
                       <pre>{{ $event->play }} {{ $event->type }} play to the {{ $event->side }} for {{ $event->yardage }} by #{{ $event->ball_carrier }}.</pre>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
