<?php

class Fruit {

    public $name, $color;

    public function __construct(){
        echo "Constructor is automatically run when we create an object of class";
    }

    public function __destruct()
    {
        echo "<br>";
        echo "Destructor is also run automatically when script is exicuted";
    }


}

new Fruit();


?>
