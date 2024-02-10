<?php

class Constant {

    public const DB = "my_dbName1234";

    public function getName() {
        return self::DB;
    }

}


$obj = new Constant();
// echo Constant::DB;
echo $obj->getName();