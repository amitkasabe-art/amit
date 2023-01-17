<?php 

class Person{

    public $name = "amitkasabe";
    public $age  = 20;
    function __construct($n , $a)
    {
        $this->name = $n;
        $this->age  = $a;
    }
    function Show()
    {
        echo "name is : " .$this->name ."age is:". $this->age;
    }

    
}
$p = new person("amit" , 23);
$p->show();
?>