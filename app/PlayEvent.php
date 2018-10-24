<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayEvent extends Model
{
    protected $fillable = [
        'type',
        'play',
        'yards',
        'rusher',
        'tackler',
        'offense',
    ];
}
