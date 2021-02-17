<?php

class Person
{
    const species = 'Homo Sapiens';
    public $name;
    public $age;
    public $occupation;

    function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function introduce(): string
    {
        return "Hello, my name is $this->name";
    }

    public final function describe_job(): string
    {
        return "I am currently working as a(n) $this->occupation";
    }

    public final static function greet_extraterrestrials($species): string
    {
        return "Welcome to Planet Earth $species";
    }
}

class ComputerProgrammer extends Person
{
    public function introduce(): string
    {
        return parent::introduce() . " and I am a $this->occupation";
    }
}