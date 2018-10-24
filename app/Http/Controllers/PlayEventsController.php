<?php

namespace App\Http\Controllers;

use App\PlayEvent;
use Illuminate\Http\Request;

class PlayEventsController extends Controller
{
    public function create()
    {
        return view('playevents.create');
    }

    public function store(Request $request)
    {
        try {
            $event = PlayEvent::create($request->only([
                'type',
                'play',
                'rusher',
                'yards',
                'tackler',
                'offense',
            ]));
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
