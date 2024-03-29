<?php
// << Class  >> : is a template for the object where you can group all the attributes or the properties and the methods or the functionnalities of the object

// << Object  >> : is an instance of the class , i can create multiple objects from one Class wich i can use.

// << Access Modifiers >> : 
    // public - the property or method can be accessed from everywhere. This is default
    // protected - the property or method can be accessed within the class and by classes derived from that class
    // private - the property or method can ONLY be accessed within the class

class Phone {

    public String $type;
    public String $model;
    public String $color;
    public String $cameraPixels;
    public int $storageSize;
    public int $batteryLife;

    // constructor

    public function turnOn() {
        echo "Hi i just turned on :) " ;
        date_default_timezone_set('Africa/Casablanca');
        $date = date('d-m-y h:i:s');
        echo '<br>' . "Current date time is : " . $date;
    }

    public function turnOff(){
        echo "See you later";
    }

    public function takePicture(){
        echo "Say Cheeeesssssseee" . '<br>';
        return "image.png";
    }

    
}

// Creating a new Object From The Phone Class
$device = new Phone();
// Setting The specifications of the device 
$device -> type = "iphone";
$device -> model = "X Max";
$device -> color = "Black";
$device -> cameraPixels = 100;
$device -> storageSize = 500;
$device -> batteryLife = 5000;

echo $device ->type;
echo "\n";
echo $device ->model;
