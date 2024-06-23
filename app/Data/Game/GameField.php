<?php

namespace App\Data\Game;

use Spatie\LaravelData\Data;

class GameField extends Data
{
    function __construct(
        public readonly GameFieldType $type,
        public readonly bool          $is_extended_only,
        public int                    $score = 0,
        public bool                   $is_claimed = false
    )
    {

    }
}
