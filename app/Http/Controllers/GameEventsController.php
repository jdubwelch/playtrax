<?php

namespace App\Http\Controllers;

use App\Game;
use App\Event;
use Illuminate\Http\Request;

class GameEventsController extends Controller
{
    public function index(Game $game)
    {
        $events = $game->events;

        return view('gameEvents.index', compact('game', 'events'));
    }

    public function store()
    {
        try {
            $event = Event::create([
            'user_id' => auth()->user()->id,
            'game_id' => request('game_id'),
            'quarter' => request('quarter'),
            'type' => request('type'),
            'side' => request('side'),
            'play' => request('play'),
            'yardage' => request('yardage'),
            'ball_carrier' => request('ball_carrier'),
            'tackled_by' => request('tackled_by'),
        ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
