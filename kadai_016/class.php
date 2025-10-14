<?php

class Food {
    private $name;
    private $price;


    function __construct(string $name, $price){
        $this->name = $name;
        $this->price = $price;
    }

  
    function show_price(){
        echo $this->price . '<br>';
    }
}


$potato = new Food("potato", 250);
$potato->show_price();
print_r($potato);


class Animal {
    private $name;
    private $height;
    private $weight;

    function __construct(string $name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

   
    function show_height(){
        echo $this->height . '<br>';
    }
}

$lion = new Animal("dog", 60, 5000);
$lion->show_height();
print_r($lion);

?>