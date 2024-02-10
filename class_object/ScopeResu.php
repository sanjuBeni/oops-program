<?php

class ScopeResu {
    const DB = "myDB";
    static $name = "name";
}

class NewClass extends ScopeResu {
    public function getparentData() {
        echo parent::DB;
        echo "<br>";
        echo parent::$name;
    }
}

$obj = new NewClass();
$obj->getparentData();