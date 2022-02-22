<?php

namespace Mathildegrimal\PackageComposer;

class Inspire
{

    private $index = 0;
    protected $inspirations = [
        "You are amazing",
        "You are great",
        "You are beautiful",
        "You are nice'",
        "You are awesome",
        "You are smart"
    ];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function displayInspiration()
    {
        return "Mathilde says : ".$this->inspirations[rand(0, count($this->inspirations)-1)]." ".$this->name."\n";
    }
}
?>