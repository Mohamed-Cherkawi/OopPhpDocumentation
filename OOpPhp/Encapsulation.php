<?php
// << Constructor  >> : Used To Create a new Object from the class , constructor used to initialize/set the attributes of the class


class Phone {
    private string $type;
    private string $model;
    private string $color;
    private string $cameraPixels; // mega Pixels
    private int $storageSize; // gigaOctect
    private int $batteryLife;

    /*public function __construct($type,$model,$color,$cameraPixels,$storageSize,$batteryLife){
        $this->type = $type;
        $this->model = $model;
        $this->color = $color;
        $this->cameraPixels = $cameraPixels;
        $this->storageSize = $storageSize;
        $this->batteryLife = $batteryLife;

    }
    */

    public function setType(string $type) :void
    {
        $this -> type = $type;
    }

    public function gettype() :string
    {
        return $this -> type;
    }

    public function setmodel(string $model) :void
    {
        $this -> model = $model;
    }

    public function getModel() :string
    {
        return $this -> model;
    }

    public function setColor(string $color) :void
    {
        $this -> color = $color;
    }

    public function getColor() :string
    {
        return $this -> color;
    }

    public function setCameraPixels(int $pixels) :void
    {
        $this -> cameraPixels = $pixels;
    }

    public function getCameraPixels() :int
    {
        return $this -> cameraPixels;
    }

    public function setStorageSize(int $size) :void
    {
        $this -> storageSize = $size;
    }

    public function getStorageSize() :int
    {
        return $this -> storageSize;
    }

    public function setBatteryLife(int $number) :void
    {
        $this -> batteryLife = $number;
    }

    public function getBatteryLife() :int
    {
        return $this -> batteryLife;
    }
}

$device = new Phone();
$device -> setType("iphone");
$device -> setmodel("11 pro");
$device -> setColor("red");
$device -> setCameraPixels(330);
$device -> setStorageSize(1000);
$device -> setBatteryLife(5000);

echo $device -> getStorageSize();
