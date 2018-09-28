<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function store()
    {
        $event = Event::create([
            'play' => request('play'),
            'yardage' => request('yardage')
        ]);
    }
}
