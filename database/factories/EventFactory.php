<?php

use App\Game;
use App\User;
use App\Event;

class EventFactory
{
    public $user = null;
    public $game = null;

    public function managedBy(User $user)
    {
        $this->user = $user;
        return $this;
    }

    public function forGame(Game $game)
    {
        $this->game;
        return $this;
    }

    public function create()
    {
         return factory(Event::class)->create([
            'user_id' => $this->user ?? factory(User::class)->create(),
            'game_id' => $this->game ?? factory(Game::class)->create(),
        ]);
    }
}