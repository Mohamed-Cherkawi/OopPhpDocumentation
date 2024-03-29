<?php

// It is used to define the relationship between two classes. When a child class acquires all
// properties and behaviors of parent class known as inheritance.
class Animal {
    private string $name;
    private string $type;
    private string $color;
    private string $gender;
    private int $age;
    private int $numOfLegs;

    public function __construct(string $name , string $type,string $color , string $gender , int $age , int $numOfLegs) 
    {
        $this -> name = $name;
        $this -> type = $type;
        $this -> color = $color;
        $this -> gender = $gender;
        $this -> age = $age;
        $this -> age = $numOfLegs;

    }

    public function eat() :string
    {
        return "Eat";
    }

    public function sleep() :string
    {
        return " Sleep ZZZZZZZZZZZZZZZZZZZZZZZZZZZZ";
    }

    protected function makeSound() :string{
        return "";
    }

    public function setName( string $name ) :void
    {
        $this -> name = $name;
    }

    public function getName() :string
    {
        return $this -> name;
    }
}

//$anonymousAnimal = new Animal("Aigle","Bird","brown","male", 1 , 2);
//echo "Hi im an " . $anonymousAnimal -> getName() . " and i love to " . $anonymousAnimal -> eat() . " and to " . $anonymousAnimal -> sleep();

echo "\n \n";

class Dog extends Animal {
    
    // Overidding Method from the Parent Class
    public function makeSound(): string
    {
        return "WooooF";
    }

    public function guard():string
    {
        return "Hi My Name is " . $this -> getName() . " and i Help Humans By guarding Their house" . "\n"
        . "I Scare thieves by making this sound : " . $this -> makeSound();
    }

}

$dog = new Dog("Boobiz","dog","white","female", 3 , 4);
echo $dog -> guard();