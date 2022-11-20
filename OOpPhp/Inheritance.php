<?php

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
echo "<pre>";
$anonymousAnimal = new Animal("Aigle","Birds","brown","male", 1 , 2);
echo "Hi im an " . $anonymousAnimal -> getName() . " and i love to " . $anonymousAnimal -> eat() . " and to " . $anonymousAnimal -> sleep();
echo "</pre>";


class Dog extends Animal {
    
    // Overidding Method from the Parent Class
    public function makeSound(): string
    {
        return "WooooF";
    }

    public function guard():void{
        echo "Hi My Name is " . $this -> getName() . " and i Help Humans By guarding Their house" . "<br>";
        echo "I Scare thieves by making this sound : " . $this -> makeSound();
    }

}

echo "<pre>";
$dog = new Dog("Boobizz","dogs","white","female", 3 , 4);
echo "<br>";
echo $dog -> guard();
echo "</pre>";
