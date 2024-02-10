<?php

class Fruit {

    public $name, $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}

$obj = new Fruit("Orange", "Yellow");

// echo "$obj->name $obj->color";


// Parent class constructor execute in child class if child class constructor have


class Class1 {

    public function __construct()
    {
        echo "Parent class constructor";
    }

}

class Child2 extends Class1 {

    function __construct()
    {
        parent::__construct();
        echo "<br>";
        echo "Child class construction";
    }
}

$class2 = new Child2();







?>