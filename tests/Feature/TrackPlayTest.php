<?php

namespace Tests\Feature;

use App\Game;
use App\User;
use App\Event;
use EventFactory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TrackPlayTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_can_track_a_play()
    {
        $this->disableExceptionHandling();

        // Arrange
        $user = factory(User::class)->create();
        $game = factory(Game::class)->create();
        $event = factory(Event::class)->make([
            'game_id' => $game->id
        ]);

        // Act
        $this->signIn($user);
        $this->post('/games/1/events', $event->toArray());

        // Assert
        $this->assertCount(1, Event::get());
    }

}