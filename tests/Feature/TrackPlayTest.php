<?php

namespace Tests\Feature;

use App\Game;
use App\User;
use App\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TrackPlayTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_user_can_track_a_play()
    {
        // $this->disableExceptionHandling();

        // Arrange
        $user = factory(User::class)->create();
        $game = factory(Game::class)->create();
        $event = factory(Event::class)->make([
            'game_id' => $game->id,
        ]);

        // Act
        $this->signIn($user);
        $this->post('/games/1/events', $event->toArray());

        // Assert
        $this->assertCount(1, Event::get());
    }

    /** @test */
    public function a_user_can_view_the_events_for_a_game()
    {
        // $this->disableExceptionHandling();

        // Arrange
        $user = create(User::class);
        $game = create(Game::class, ['home_team' => 'Homers', 'away_team' => 'VisitingTeam']);
        $event = create(Event::class, ['user_id' => $user, 'game_id' => $game]);

        // Act
        $this->signIn($user);

        $this->get('/games/'.$game->id.'/events')
            ->assertSee($game->home_team)
            ->assertSee($game->away_team)
            ->assertSee($event->play);
    }
}
