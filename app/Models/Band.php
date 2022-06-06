<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = [
        'name', 'components', 'genre', 'live_on_stage', 'bio', 'stage_number'
    ]
}
