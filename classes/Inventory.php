<?php 

class Inventory {
    public function carTotal($company, $numberOfCars = 1) {
$companies = [
    "BMW" => 240,
    "Honda" => 177
];
$totalAfter = $companies[$company] - $numberOfCars;
return "{$totalAfter} Total of cars left after purchase";

    }
}

?>