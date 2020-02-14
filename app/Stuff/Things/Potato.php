<?php

namespace App\Stuff\Things;

class Potato
{
    private $watered = 0;

    public function water() : Potato
    {
        $this->watered += 1;
        return $this;
    }

    public function hasGrown() : bool
    {
        return $this->watered >= 5;
    }
}

// Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times.