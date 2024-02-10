<?php

class Test {
    private $foo;

    public function __construct($foo) {
        $this->foo = $foo;
    }

    public function getFoo() {
        echo $this->foo;
    }

    public function classAsParm($other) {
        $other->foo = "Hello";
        echo $other->foo;
    }

}

$obj = new Test("Foo Data");

$obj->getFoo();
echo "<br>";
$obj->classAsParm(new Test("other"));