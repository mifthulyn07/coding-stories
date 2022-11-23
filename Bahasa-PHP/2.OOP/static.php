<?php 

// class parent 
class Parents{
    //property
    public static $my_static = 'foo';

    // method 
    public function self_getStatic() {
        // memanggil property di class yang sama
        return self::$my_static;
    }
}

// class child 
class Child extends Parents{
    // method 
    public function parent_getStatic() {
        // memanggil property di class parent 
        return parent::$my_static;
    }
}

//memanggil class yang ber static tanpa menggunakan instance
echo Parents::$my_static, "<br>";

// memanggil class yang ber static menggunakan instance 
$classParents = new Parents();
echo $classParents->self_getStatic(), "<br>";
echo $classParents::$my_static, "<br>";
// ini bukan cara memanggil static
//echo $foo->my_static;      // Undefined "Property" my_static 

//menaruh nama kelas dalam bentuk veriabel  
$classname = 'Parents';
echo $classname::$my_static, "<br>";

//child bisa mengakses property parents
echo Child::$my_static, "<br>";
$classChild = new Child();
echo $classChild->parent_getStatic(), "<br>";
?>