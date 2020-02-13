<?php

namespace App;

class Person
{
    private $firstName;
    private $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        
    }
}

// Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private: so you'll need to a create fullName() method too.