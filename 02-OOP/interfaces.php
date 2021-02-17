<?php

interface CanFly
{
    public function fly()
    {
    }
}

interface CanSwim
{
    public function swim()
    {
    }
}

interface CanClimb
{
    public function climb()
    {
    }
}

interface CanGreet
{
    public function greet($name)
    {
    }
}

interface CanIntroduce
{
    public function speak()
    {
    }

    public function introduce()
    {
    }
}

interface CanSpeak
{
    public function speak()
    {
    }
}

class Bird implements CanFly
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function fly(): string
    {
        return "I am flying";
    }

    public function chirp(): string
    {
        return "Chirp chirp";
    }
}

class Duck extends Bird implements CanSwim
{
    function __construct($name)
    {
        parent::__construct($name);
    }

    public function chirp(): string
    {
        return "Quack quack";
    }

    public function swim(): string
    {
        return "Splash! I'm swimming";
    }
}

class Cat implements CanClimb
{
    public function climb(): string
    {
        return "Look, I'm climbing a tree";
    }

    public function meow(): string
    {
        return "Meow meow";
    }

    public function play($name): string
    {
        return "Hey $name, let's play!";
    }
}

class Dog implements CanSwim, CanGreet
{
    public function swim(): string
    {
        return "I'm swimming, woof woof";
    }

    public function greet($name): string
    {
        return "Hello $name, welcome to my home";
    }

    public function bark(): string
    {
        return "Woof woof";
    }
}

class Person implements CanGreet, CanIntroduce
{
    public string $name;
    public int $age;
    public string $occupation;

    function __construct($name, $age, $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    public function greet($name): string
    {
        return "Hello $name, how are you?";
    }

    public function speak(): string
    {
        return "What am I supposed to say again?";
    }

    public function introduce(): string
    {
        return "Hello, my name is $this->name, I am $this->age years old and I am currently working as a(n) $this->occupation";
    }
}