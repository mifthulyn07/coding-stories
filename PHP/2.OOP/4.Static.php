<?php
// dengan keyword static, property & method dapat di akses tanpa harus memanggil objectnya  
class ContohStatic{
    public static $property = "ini merupakan property dengan keyword static<br>";

    public static function method(){
        return "ini merupakan method dengan keyword static<br>";
    }

    public static function propertyMethod(){
        // di static tidak mengenal this->$property 
        echo self::$property;
        echo self::method();
    }
}

echo ContohStatic::$property;
echo ContohStatic::method();

ContohStatic::propertyMethod();



?>