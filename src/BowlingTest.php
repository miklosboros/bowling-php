<?php

namespace Bowling;

use PHPUnit\Framework\TestCase;

require_once "Bowling.php";

final class BowlingTest extends TestCase
{
    public function gameProvider(): array
    {
        return [
            [
                "description" => "gutter",
                "rolls"       => [0, 0, 0, 0],
                "want"        => 0
            ]
        ];
    }

    /**
     * @dataProvider gameProvider
     */
    public function testScore(string $description, array $rolls, int $want): void
    {
        $g = new Game;
        foreach($rolls as $roll) {
            $g->roll($roll);
        }

        $this->assertSame(
            $want,
            $g->getScore(),
            sprintf("got %d, want %d", $g->getScore(), $want)
        );
    }
}
