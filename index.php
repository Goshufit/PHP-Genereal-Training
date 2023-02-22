<?php 
// $cars = ["benz", "bmw", "honda", [1,2,3,4,5]];

// var_dump($cars)


// Associative Array

// $data = [[
//     "city" => "NY",
//     "population" => 12000000,
//     "size" => "medium"
// ],
// [
//     "city" => "Miami",
//     "population" => 10000000,
//     "size" => "small"
// ],
// [
//     "city" => "Los Angeles",
//     "population" => 11000000,
//     "size" => "large"
// ]];


// // LOOPS

// // for ($i = 0; $i < 3; $i++){
// //     echo "<h2>" . "The city of {$data[$i]["city"]} is {$data{$i}["population"]} peoplle and it's considered a {$data[$i]["size"]} city". "</h2>";
// // };

// foreach ($data as $item) {
//     echo "<li>{$item["city"]}</li>";
// }



// Functions

// function add($a = 0, $b = 0) {
//     echo "<h1>" . $a + $b . "</h1>";
//     return $a + $b;
// }

// var_dump(add())

// function printName($name, $city) {
//     echo "<h1>" . "My name is {$name} I was born in {$city}";
// }
// printName("Jean-Pierre", "St.Catherine")




// Global Variable

// require('function.php');
// $car = "bmw";

// function printCar(){
//     // global $car;
//     // echo $car;
//     // or you can use
//     echo $GLOBALS['car'];
// }
// printCar();




// Global Server Variable

// require('function.php');
// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['QUERY_STRING'];




// Global Request Variable


// if(empty($_GET['min'])) {
//     echo "this is empty";
// } else {
//     echo "this guys name is {$_GET['min']}";
// }





// Cookies

// require('function.php');
// $amazon_key = "AmazonProduct";
// $amazon_product = "MacBook Air";
// setcookie($amazon_key, $amazon_product, time() + (86400 * 30), "/");

// if (isset($_COOKIE["AmazonProduct"])) {
//     echo "Here's 20% OFF since we know you want this product";
// } else {
//     echo "Sorry this is the first time this user landed here so no cookies";
// }







// Session Variables


// session_start();
// $_SESSION["user"] = "@JPG93";
// $_SESSION["age"] = "23";
// $_SESSION["genre"] = "hiphop";

// if (isset($_SESSION["user"])) {
//     echo "User: {$_SESSION["user"]}";
// }
// $_SESSION["user"] = "@bob33";
// if (isset($_SESSION["user"])) {
//     echo "New User: {$_SESSION["user"]}";
// }
// session_unset();
// session_destroy();
// var_dump($_SESSION);
// 




// Classes

// class car {
//     public $doors = 4;
// public function __construct($name, $doors = 4, $color = "black"){
    
//     $this->doors = $doors;
//     $this->color = $color;
//     $this->name = $name;
// }

// public function printName() {
//     echo $this->name;
// }

// public function statement() {
//     echo "This car is a {$this -> name} and it has {$this -> doors} doors. The color of it is {$this -> color}";
// }

// }

// $honda = new Car("Civic");
// $greenHonda = new Car("Civic", 2, "Green");
// $bmw = new Car("M6", 4, "Space Grey");

// echo $honda -> doors;
// echo $greenHonda -> color;

// $honda->printName();

// echo "<pre>" . var_dump($honda) . "</pre>";
// $honda -> statement();
// $greenHonda -> statement();
// $bmw -> statement();






// Extending Classes
// require("classes/Car.php");
// require("classes/Honda.php");
// require("classes/BMW.php");



// $car1 = new Honda("Civic", 2, "Green", "25,000");

// $car2 =  new BMW("M3", 4, "Space Grey", "80,000");

// $car1->statement();
// $car1->price();
// $car2->price();
// $car2->sportsPackage()






// Public vs Protected vs Private Variables

require("classes/Car.php");
require("classes/Honda.php");
require("classes/BMW.php");



$car1 = new Honda("Civic", 2, "Green", "25,000");

// $car2 =  new BMW("M3", 4, "Space Grey", "80,000");

$car1->price();
$car1->statement();
// $car1->location();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Thank God</h1>

</html>