<?php

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function hello()
    {
        echo "$this->name say hello..";
    }
    static function info()
    {
        echo "Animal Class";
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "$this->name is running...";
    }
}
// Animal::info();
$bobby = new Dog("Bobby");
$bobby->run();
