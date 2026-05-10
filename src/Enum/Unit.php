<?php

namespace App\Config;

enum Unit: string
{
    case Piece = 'piece';
    case Hour = 'hour';
    case Day = 'day';
    case Month = 'month';
    case Year = 'year';
}
