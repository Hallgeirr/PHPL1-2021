<?php

class Person
{
    protected $name;
    protected $age;
    protected $occupation;

    function __construct($name, $age, $occupation)
    {
        $this->name = $this->validData($name, 'name');
        $this->age = $this->validData($age, 'age');
        $this->occupation = $this->validData($occupation, 'occupation');
    }

    public function validData($data, $key)
    {
        if ($key == 'name' && !is_string($data)) {
            throw new InvalidArgumentException('Name must be a string!');
        }
        if ($key == 'age' && (!is_int($data) || $data < 0)) {
            throw new InvalidArgumentException('Age must be a non-negative integer!');
        }
        if ($key == 'occupation' && !is_string($data)) {
            throw new InvalidArgumentException('Occupation must be a string!');
        }
        return $data;
    }

    public function get_name(): string
    {
        return $this->name;
    }

    public function get_age(): int
    {
        return $this->age;
    }

    public function get_occupation(): string
    {
        return $this->occupation;
    }

    public function set_name($name)
    {
        $this->validData($name, 'name');
        $this->name = $name;
    }

    public function set_age($age)
    {
        $this->validData($age, 'age');
        $this->age = $age;
    }

    public function set_occupation($occupation)
    {
        $this->validData($occupation, 'occupation');
        $this->occupation = $occupation;
    }

}