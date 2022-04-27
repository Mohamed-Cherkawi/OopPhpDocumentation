<?php

class Vehicule {

    public $make;
    public $model;
    public $color;
    public $noOfWheels;
    public $engineNumber;

    //
    public function __construct($make,$model,$color,$nonOfWheels,$engineNumber){
        $this->make = $make;
        $this->model = $model;
        $this->color = $color;
        $this->noOfWheels = $nonOfWheels;
        $this->engineNumber = $engineNumber;
    }
    public function getMake() {
        return $this->make ;
    }
    
    }

class Car extends Vehicule {
    
    public $doors = 4;
    public $passengerCapacity = 5;
    public $steeringWheel = true ;
    public $transmition = 'manual';
}

class Motorcycle extends Vehicule {
    
    public $noOfWheels = 2;
    public $stroke = 4 ;
    public $type = 'standard';
    
}
 


$objMake = new Vehicule(1132332,"AUdi", "red", "Uknonwn",876);


 echo '<pre>' ;

 print_r($objMake);
 
 echo '</pre>' ;

 $car = new Car(123435,"BMW","Gold" , 4,6577);

 echo '<pre>' ;

 print_r($car);
 
 echo '</pre>' ;

 echo '<pre>' ;

 print_r($Motorcycle);
 
 echo '</pre>' ;