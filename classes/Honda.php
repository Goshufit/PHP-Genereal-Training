<?php 


class Honda extends Car{

public $companyYears = 47;
public $company = "Honda";

    public function __construct($name, $doors, $color, $price, Inventory $inventory) {

        $this -> name = $name;
        $this -> doors = $doors;
        $this -> color = $color;
        $this -> price = $price;
        $this -> inventory = $inventory;

    }

public function price() {
    echo "<h1>The price of this {$this -> company} {$this -> name} is {$this -> price} Dollars</h1>";

    echo $this->inventory->carTotal($this->company, 4);
    echo $this->inventory->carsSold(4);
}

}

?>