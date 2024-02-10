<?php

class ReadonlyProp {

    public string $str;

    public function __construct(string $str) {
        $this->str = $str;
    }

    public function getStr() : string {
        return 9090;
    }

}
$obj = new ReadonlyProp("Readonly property only read the data, we cann't modify the data.");

echo $obj->getStr();