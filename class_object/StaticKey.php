<?php


class StaticKey {

    public static $name = "Sanjay";

    public static $x, $y;

    public function __construct(int $x, int $y)
    {
        self::$x = $x;
        self::$y = $y;
    }

    public static function getData() {
        return self::$x + self::$y;
    }

}

class Child extends StaticKey {
    public static function myData() {
        return parent::getData();
    }
}

$obj = new StaticKey(30, 40);

// echo StaticKey::getData();
// echo Child::myData();
// echo Child::$name;
// echo "<br>";
// echo StaticKey::$name;