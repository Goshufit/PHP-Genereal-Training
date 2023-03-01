<?php 
interface InventoryInterface {
    public function carsSold($numberOfCars);
}

class Inventory implements InventoryInterface {
    public function carTotal($company, $numberOfCars = 1) {
$companies = [
    "BMW" => 240,
    "Honda" => 177
];
$totalAfter = $companies[$company] - $numberOfCars;
return "{$totalAfter} Total of cars left after purchase";

}

public function carsSold($numberOfCars) {
    echo "<h2>Today we sold {$numberOfCars}</h2>";
}
    
}

?>