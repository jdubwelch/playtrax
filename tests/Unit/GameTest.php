<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GameTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_game_has_events()
    {
        $game = create('App\Game');
        $this->assertInstanceOf(
            'Illuminate\Database\Eloquent\Collection', $game->events
        );
    }
}
