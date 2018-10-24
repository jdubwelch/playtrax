<?php

namespace Tests\Feature;

use App\PlayEvent;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TrackPlayEventsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_run_play_can_be_recorded()
    {
        $this->disableExceptionHandling();

        $play = [
            'type' => 'run',
            'play' => 'Spin 28 Power',
            'yards' => 4,
            'rusher' => 8,
            'tackler' => 19,
            'offense' => 'shs',
        ];

        $this->post('/playevents', $play);

        $this->assertCount(1, PlayEvent::get());
        $this->assertDatabaseHas('play_events', $play);
    }
}
