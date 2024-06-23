<?php

namespace App\Data\Game;

use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;

class GamePlayer extends Data implements Wireable
{
    use WireableData;

    function __construct(
        public readonly string $user_id,
        public string          $display_name,
        public bool            $is_ready = false
    )
    {
    }
}
