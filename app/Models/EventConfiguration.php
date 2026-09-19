<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventConfiguration extends Model
{
    protected $table = 'event_configurations';

    protected $fillable = [
        'key',
        'value',
    ];
}