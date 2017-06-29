<?php
require_once('Product.php');

$veg1 = new Product();
$veg2 = new Product();
$veg3 = new Product();

$cloth1 = new Product();
$cloth2 = new Product();
$cloth3 = new Product();

foreach ($products as $product) {
	echo '<table>'.$product->_id().' '.$product->_name().' '.$product->_price().'</table>';
}


?>

