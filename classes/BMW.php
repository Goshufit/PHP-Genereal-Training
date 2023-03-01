<?php 
// require("<classes/Car.php");
class BMW extends Car {
    public $company = "BMW";
    public $companyYears = 49;

    public function __construct($name, $doors, $color, $price) {

        $this -> name = $name;
        $this -> doors = $doors;
        $this -> color = $color;
        $this -> price = $price;


    }

    public function price() {
        echo "<h1>The price of this {$this -> company} {$this -> name} is {$this -> price} Euro</h1>";
    }

    public function sportsPackage() {
        echo "<h1>This car is fully equipped</h1>";
    }
}


?>