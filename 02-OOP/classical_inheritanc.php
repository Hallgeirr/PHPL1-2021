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

    public function describe_job(): string
    {
        return "I am currently working as a(n) $this->occupation";
    }

    public static function greet_extraterrestrials($species): string
    {
        return "Welcome to Planet Earth $species";
    }
}

class Salesman extends Person
{
    const occupation = 'Salesman';

    public function __construct($name, $age)
    {
        $occupation = self::occupation;
        parent::__construct($name, $age, $occupation);
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce(): string
    {
        return "Hello, my name is $this->name, don't forget to check out my products!";
    }
}

class ComputerProgrammer extends Person
{
    const occupation = 'Computer Programmer';

    public function __construct($name, $age)
    {
        $occupation = self::occupation;
        parent::__construct($name, $age, $occupation);
        $this->name = $name;
        $this->age = $age;
    }

    public function describe_job(): string
    {
        $occupation = self::occupation;
        return "I am currently working as a(n) $occupation, don't forget to check out my Codewars account ;)";
    }
}

class WebDeveloper extends ComputerProgrammer
{
    const occupation = 'Web Developer';

    public function __construct($name, $age)
    {
        $occupation = self::occupation;
        parent::__construct($name, $age, $occupation);
        $this->name = $name;
        $this->age = $age;
    }

    public function describe_job(): string
    {
        $occupation = self::occupation;
        return "I am currently working as a(n) $occupation, don't forget to check out my Codewars account ;) And don't forget to check on my website :D";
    }

    public function describe_website(): string
    {
        return "My professional world-class website is made from HTML, CSS, Javascript and PHP!";
    }
}