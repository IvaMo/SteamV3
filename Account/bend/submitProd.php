Please wait... (servers are busy)

<?php


require_once("../db.php");

$name = $_POST['name'];
$desc = $_POST['desc'];
$min = $_POST['min'];
$price = $_POST['price'];








$insert = $db->prepare("INSERT INTO `products` ( `name`, `descr`, `min`, `price`,`pid`, `approved`)
VALUES ( :name, :desc, :min, :price, NULL, 0)");

$insert->bindParam(':name', $name);
$insert->bindParam(':desc', $desc);
$insert->bindParam(':min', $min);
$insert->bindParam(':price', $price);


$insert->execute();


header("Location: ../AddProd.php");

?>