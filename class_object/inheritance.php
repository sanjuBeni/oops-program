<?php

class First {

    public $name, $color;

    protected function get_data() {
        return "$this->name ,  $this->color";
    }

}

class Second extends First {

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_parent_data(){
        return $this->get_data();
    }

}

$obj2 = new Second("Apple123", "Red321");

echo $obj2->get_parent_data();