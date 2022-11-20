<?php
// << Constructor  >> : Used To Create a new Object from the class , constructor used to initialize/set the attributes of the class


class Phone {
    private String $type;
    private String $model;
    private String $color;
    private String $cameraPixels; // mega Pixels
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

$device = new Phone("iphone","11 pro" , "red" , 330,1000,5000);

echo $device -> getStorageSize();
