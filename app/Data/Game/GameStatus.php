<?php

namespace App\Data\Game;

enum GameStatus
{
    case WAITING;
    case ONGOING;
    case ENDED;
}
