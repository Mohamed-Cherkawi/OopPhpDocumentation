<?php

/*
    Class Abstraction
    -Cannot Be Instantiated [ Cannot Create Object From ]
    - Made For Other Classes To inherit Properties & Methods From
    - Can Have Methods & Properties .
    - Can Have Abstract Method And Non Abstracted Methods
    - Abstract Methods [ Contains No Body Code ].

    Another Defintion of ABstraction :
    * Rules To Go On
    * Force Developper To Follow Your Methods . 
 */


abstract class MakeDevice {
   

    abstract public function testPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($n);

    public function Maher(){
        echo "Maher" ;
    }
}

class Iphone  extends MakeDevice{

    public $owner;

    public function testPerformance()
    {
        echo 'Performance Is Good 100%';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function sayWelcome($x)
    {
        $this->owner = $x;
        echo 'Hello' . $x;
    }

}

class Ipad  extends MakeDevice{

    public $owner;

    public function testPerformance()
    {
        echo 'Performance Is Good';
    }
    public function verifyOwner()
    {
        echo 'Owner is verified';
    }
    public function sayWelcome($s)
    {
        $this->owner = $s;
        echo 'Welcome' . $s;
    }

}
// Iphone 
$Iphone = new Iphone();
$Iphone->sayWelcome("Mohamed");
echo '<pre>';
print_r($Iphone);
echo '</pre>';

// Ipad 
$Ipad = new Ipad();
$Ipad->sayWelcome("Salima");
echo '<pre>';
print_r($Ipad);
echo '</pre>';

