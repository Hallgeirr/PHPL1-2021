<?php

class Person
{
    public $first_name;
    public $last_name;

    public function __construct($name, $second_name)
    {
        $this->first_name = $name;
        $this->last_name = $second_name;
    }

    public function get_full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}