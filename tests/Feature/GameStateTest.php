<?php

use App\Data\Game\GamePlayer;
use App\Data\Game\GameState;
use Illuminate\Support\Str;
use Spatie\LaravelData\DataCollection;

test('that empty game state can be created', function () {
    $gameState = new GameState(
        Str::random(6),
        GamePlayer::collect([], DataCollection::class),
        collect([]),
        false
    );

    expect($gameState)->toBeInstanceOf(GameState::class);
});
