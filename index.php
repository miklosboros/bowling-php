<?php

require_once "src/Bowling.php";

{
    // simple game
    $g = new Bowling\Game;

    // 5
    $g->roll(2);
    $g->roll(3);

    // 5
    $g->roll(2);
    $g->roll(3);

    echo $g->getScore()."\n"; // 10
}

{
    // spare
    $g = new Bowling\Game;

    // 10 + 5
    $g->roll(8);
    $g->roll(2);

    // 6
    $g->roll(5);
    $g->roll(1);

    echo $g->getScore()."\n"; // 21
}

{
    // strike
    $g = new Bowling\Game;

    // 10 + 6
    $g->roll(10);

    // 6
    $g->roll(5);
    $g->roll(1);

    echo $g->getScore()."\n"; // 22
}
