<?php

class Food {
    private $name;
    private $price;

    public function show_price() {
        echo $this->price . '<br>';
    }

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function show_height() {
        echo $this->height . '<br>';
    }

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
}

$food = new Food('potato', 250);
$animal = new Animal('dog', 60, 5000);

echo print_r($food, true) . '<br>';
echo print_r($animal, true) . '<br>';

$food->show_price();
$animal->show_height();

?>