<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_state',
    ];

    protected function casts()
    {
        return [
            'game_state' => 'array',
        ];
    }
}
