<?php

namespace HieuLe\BodyClasses;

class Body
{
    protected $classes = [];

    public function addClasses($classes)
    {
        if (!is_array($classes)) {
            $classes = [$classes];
        }

        foreach ($classes as $class) {
            $this->classes[] = $class;
        }

        $this->classes = array_unique($this->classes);
    }

    public function getClasses()
    {
        return implode(' ', $this->classes);
    }
}