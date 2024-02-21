<?php

interface InterfaceKey {
    public function getName();
}

interface NewInter {
    public function sum($a, $b);
}

class Multi implements InterfaceKey, NewInter {
    public function getName()
    {
        return "Pratiksh Beniwal";
    }

    public function sum($a, $b = 10){
        return $a + $b;
    }
}

$obj = new Multi();

echo $obj->getName();
echo "<br>";
echo $obj->sum(40);