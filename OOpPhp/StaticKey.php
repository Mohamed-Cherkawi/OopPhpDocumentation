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
    public static $name = 'Mohamed';
    public static $age = '20';

    public static function sayHello() {
        return 'Hello';
    }
}

echo Iphone::$name;
 $phone = new Iphone();
// // echo $phone->name;  Error
// echo $phone->sayHello();//Outputs : Hello

