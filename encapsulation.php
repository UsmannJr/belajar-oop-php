<?php

class  fruit{
    private $name;
    private $color;
    
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$apple = new fruit();
$apple->set_name("Apel");
$apple->set_color("Merah");

echo $apple->get_name();
echo $apple->get_color();

?>