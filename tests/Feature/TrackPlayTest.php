<?php

namespace Tests\Feature;

use App\Event;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TrackPlayTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function a_user_can_track_a_play()
    {
        $this->disableExceptionHandling();

        $this->signIn();

        $event = make('App\Event');

        $this->post('/events', $event->toArray());

        $this->assertCount(1, Event::get());
    }

}