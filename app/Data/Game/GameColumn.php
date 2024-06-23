<?php

namespace App\Data\Game;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GameColumn extends Data
{
    #[DataCollectionOf(GameField::class)]
    public readonly DataCollection $fields;

    function __construct()
    {
        $this->fields = GameField::collect([
            new GameField(
                GameFieldType::ONES,
                false
            ),
            new GameField(
                GameFieldType::TWOS,
                false
            ),
            new GameField(
                GameFieldType::THREES,
                false
            ),
            new GameField(
                GameFieldType::FOURS,
                false
            ),
            new GameField(
                GameFieldType::FIVES,
                false
            ),
            new GameField(
                GameFieldType::SIXES,
                false
            ),
            new GameField(
                GameFieldType::BONUS,
                true,
                0,
                true
            ),
            new GameField(
                GameFieldType::THREE_OF_A_KIND,
                false
            ),
            new GameField(
                GameFieldType::FOUR_OF_A_KIND,
                false
            ),
            new GameField(
                GameFieldType::FULL_HOUSE,
                false
            ),
            new GameField(
                GameFieldType::SMALL_STRAIGHT,
                true
            ),
            new GameField(
                GameFieldType::LARGE_STRAIGHT,
                false
            ),
            new GameField(
                GameFieldType::LACI,
                false
            ),
            new GameField(
                GameFieldType::CHANCE,
                true
            ),
        ], DataCollection::class);
    }
}
