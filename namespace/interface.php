<?php

interface Animal
{
    public function run();
}

class Dog implements Animal
{
    public function run()
    {
        echo "The dog is running";
    }
}

class Cat implements Animal
{
    public function run()
    {
        echo "The cat is running";
    }
}

function app(Animal $obj)
{
    $obj->run();
}

app(new Cat);
app(new Dog);
