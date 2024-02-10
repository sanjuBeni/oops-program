<?php

class Override {

    public function getName() {
        echo "Parent Class getname";
    }

}

class Child extends Override {
    public function getName()
    {
        echo "Child Class getname";
        echo "<br>";
        parent::getName();
    }
}

$obj = new Child();

$obj->getName();