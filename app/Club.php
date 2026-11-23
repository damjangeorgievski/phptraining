<?php

namespace App;

use App\ExampleInterface;

class Club implements ExampleInterface
{
    protected string $name;
    protected string $league;
    protected array $players = [];

    public function example() {}

    public function __construct($name, $league)
    {
        $this->name = $name;
        $this->league = $league;
    }

    public function addPlayer(string $playerName, string $playerPosition)
    {
        $this->players = array_merge($this->players, [
            'name' => $playerName,
            'position' => $playerPosition
        ]);
    }
}
