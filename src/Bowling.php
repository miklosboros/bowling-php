<?php

namespace Bowling;

final class Game
{
    private int $score = 0;

    public function __construct()
    {

    }

    public function getScore(): int {
        return $this->score;
    }

    public function roll(int $n)
    {

    }
}
