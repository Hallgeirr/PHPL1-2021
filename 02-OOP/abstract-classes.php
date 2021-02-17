<?php

abstract class Person
{
    public string $name;
    public int $age;
    public string $gender;

    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    abstract function introduce();


    function greet($name): string
    {
        return "Hello $name";
    }
}

class Child extends Person
{
    public array $aspirations;

    function __construct($name, $age, $gender, $aspirations)
    {
        parent::__construct($name, $age, $gender);
        $this->aspirations = $aspirations;
    }

    function introduce(): string
    {
        return "Hi, I'm $this->name and I am $this->age years old";
    }

    function greet($name): string
    {
        return parent::greet() . ", let's play!";
    }

    function say_dreams(): string
    {
        return "I would like to be a(n) $this->aspirations when I grow up.";
    }
}

class ComputerProgrammer extends Person
{
    const occupation = "Computer Programmer";

    function introduce(): string
    {
        $occupation = self::occupation;
        return "Hello, my name is $this->name, I am $this->age years old and I am a(n) $occupation";
    }

    function greet($name): string
    {
        return parent::greet() . ", I'm $this->name, nice to meet you";
    }

    function advertise(): string
    {
        return "Don't forget to check out my coding projects";
    }
}