<?php

abstract class AbstractKey {

    abstract public function getData() : string;
    abstract public function sum($a, $b);

}


class SecondClass extends AbstractKey {

    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getData(): string
    {
        return "This is getData method form the abstract class";
    }

    public function sum($a, $b) {
        return $a + $b;
    }

}

$obj = new SecondClass();

echo $obj->getData(); 
echo "<br>";
echo $obj->sum(10,30);