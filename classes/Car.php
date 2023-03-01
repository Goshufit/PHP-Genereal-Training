<?php 

class Car extends Story{
    public $doors = 4;
    public $color = "black";
    public $company = "Nissan";
    private $location = "Northern Blvd";
    public static $states = [
        "NY", "GA", "FL", "CO", "PA"
    ];
    
    
    public function __construct($name, $doors, $color, $price) {

        $this -> name = $name;
        $this -> doors = $doors;
        $this -> color = $color;
        $this -> price = $price;
    } 

    public static function city() {
        echo "Austell, GA";
    } 

    private function store() {
        echo "<h1>Sold at {$this -> location}</h1>";
    }

    public static function states() {
        foreach (Car::$states as $state) {
                echo "<h1>{$state}</h1>";
        }
            
    }

    public function printCompanyYears() {

        return $this->companyYears;
    }
    

    public function statement() {
echo "<h1>{$this -> company} {$this -> name} has {$this -> doors} doors and the color is {$this -> color}</h1>";
$this->store();
    }
}

?>