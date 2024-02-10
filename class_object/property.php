<?php

class Shape {

    public int $numberOfSide;
    public string $name;

    public function setNumberOfSide (int $numberOfSide) : void 
    {
        $this->numberOfSide = $numberOfSide;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getNumberOfSide() : int 
    {
        return $this->numberOfSide;    
    }

    public function getName() : string 
    {
        return $this->name;    
    }

}

$shape = new Shape();

$shape->setNumberOfSide(1234);
$shape->setName("Shape");

var_dump($shape->getName());
var_dump($shape->getNumberOfSide());

