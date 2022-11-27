<?php

/*
    Class Abstraction
    -Cannot Be Instantiated [ Cannot Create Object From ]
    - Made For Other Classes To inherit Properties & Methods From
    - Can Have Methods & Properties .
    - Can Have Abstract Method And Non Abstracted Methods.
    - Abstract Methods [ Contains No Body Code ].
    - Cannot have abstract attributes but can have regular ones. 
    - An abstract class is a class that contains at least one abstract method.

    Another Defintion of ABstraction :
    * Rules To Go On
    * Force Developper To Follow Your Methods as you can provide it  . 
 */


abstract class MakeDevice {
   
    public $owner;
    // Abstract methods
    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function setOwner($owner);
    
    // regular method
    public function sayHello()
    {
        echo "Hello " . $this -> owner;
    }
}

class Iphone  extends MakeDevice{


    public function testPerformance()
    {
        echo 'Performance Is Good 100%';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

}

class Ipad  extends MakeDevice{

    public function testPerformance()
    {
        echo 'Performance Is Good 95%';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

}
// Iphone 
$Iphone = new Iphone();
$Iphone->setOwner("Mohamed");
$Iphone->sayHello();
echo "\n";


// Ipad 
$Ipad = new Ipad();
$Ipad->setOwner("Aziz");
$Ipad->sayHello();

/*
So, when a child class is inherited from an abstract class, we have the following rules:

The child class method must be defined with the same name and it redeclares the parent abstract method
The child class method must be defined with the same or a less restricted access modifier
The number of required arguments must be the same. However, the child class may have optional arguments in addition

*/