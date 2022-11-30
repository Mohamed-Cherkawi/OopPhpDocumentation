<?php

/*
    [ Static Keyword ]
    - Static Properties/Methods are Used to acess Properties/methods in a Global Scope 

    - Declaring class Properties or Methods as static 
    Makes Them Accessible Without Needing an Instantiation of the Class .

    - Because Static Methods are Callable without an Instance of the Object Created,
    the Pseudo-Variable $this is not Avalaible Inside the Method Declared as Static .

    - A Property Declared as Static Cannot be Accessed
    with an Instantiated Class Object ( Though a Static Method Can ) .


    - One of the Major Benefits to Using Static Properties is That They Keep Their Stored Values For The Duration of The Script ."
*/

class Iphone {
    public static $name ;
    public static $age ;

    public static function sayHello() {
        return 'Hello ' . self::$name ;
    }

    /**
     * @param mixed $name
     */
    public static function setName($name): void
    {
        self::$name = $name;
    }

    /**
     * @param mixed $age
     */
    public static function setAge($age): void
    {
        self::$age = $age;
    }

}

 Iphone::setName("omaima");
// echo $phone->name;  Error
 echo Iphone::sayHello();//Outputs : Hello

