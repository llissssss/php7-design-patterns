<?php

namespace Php7Patterns\FactoryMethod;

interface Nationality {

    public function sayHello(): string;
}

class German implements Nationality {

    public function sayHello(): string
    {
        return "Hallo";
    }
}

class Catalan implements Nationality {

    public function sayHello(): string
    {
        return "Hola";
    }
}

interface NationalityFactory {

    public function create(): Nationality;
}

class GermanFactory implements NationalityFactory {

    public function create(): Nationality
    {
        return new German();
    }
}

class CatalanFactory implements NationalityFactory {

    public function create(): Nationality
    {
        return new Catalan();
    }
}

$factory = new GermanFactory();

$german = $factory->create();
echo $german->sayHello();