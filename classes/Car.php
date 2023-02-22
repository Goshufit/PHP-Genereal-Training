<?php 

class Car {
    public $doors = 4;
    public $color = "black";
    public $company = "Nissan";
    private $location = "Northern Blvd";
    
    public function __construct($name, $doors, $color, $price) {

        $this -> name = $name;
        $this -> doors = $doors;
        $this -> color = $color;
        $this -> price = $price;
    } 

    private function store() {
        echo "<h1>Sold at {$this -> location}</h1>";
    }
    

    public function statement() {
echo "<h1>{$this -> company} {$this -> name} has {$this -> doors} doors and the color is {$this -> color}</h1>";
$this->store();
    }
}

?>