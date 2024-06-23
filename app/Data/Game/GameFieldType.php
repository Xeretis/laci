<?php

namespace App\Data\Game;

enum GameFieldType
{
    case ONES;
    case TWOS;
    case THREES;
    case FOURS;
    case FIVES;
    case SIXES;
    case BONUS;
    case THREE_OF_A_KIND;
    case FOUR_OF_A_KIND;
    case FULL_HOUSE;
    case SMALL_STRAIGHT;
    case LARGE_STRAIGHT;
    case LACI;
    case CHANCE;
}
