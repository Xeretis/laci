<?php

namespace App\Data\Game;

use Illuminate\Support\Collection;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GameState extends Data
{
    function __construct(
        public readonly string $code,
        #[DataCollectionOf(GamePlayer::class)]
        public DataCollection  $players,
        /** @var Collection<string, DataCollection<GameField>> */
        public Collection      $columns,
        public bool            $is_extended,
        public bool            $is_public = false,
        public GameStatus      $status = GameStatus::WAITING,
    )
    {

    }
}
