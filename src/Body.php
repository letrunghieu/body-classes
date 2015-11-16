<?php

namespace HieuLe\BodyClasses;

class Body
{
    /**
     * Internal classes
     *
     * @var array
     */
    protected $classes = array();

    /**
     * Append new class
     *
     * @param string|array $classes
     */
    public function addClasses($classes)
    {
        if (!is_array($classes)) {
            $classes = array($classes);
        }

        foreach ($classes as $class) {
            $this->classes[] = $class;
        }

        $this->classes = array_unique($this->classes);
    }

    /**
     * Get all internal classes as a string
     *
     * @return string
     */
    public function getClasses()
    {
        return implode(' ', $this->classes);
    }

    /**
     * Get the internal class array
     *
     * @return array
     */
    public function getClassArray()
    {
        return $this->classes;
    }
}