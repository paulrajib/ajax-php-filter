<?php
include "db.php";

$min_price=$_GET['min_price'];
$max_price=$_GET['max_price'];
/*$select_options=$_GET['select_options'];*/

//echo "Test min price".$min_price;

$r=$mysqli->query("SELECT * FROM product WHERE cost BETWEEN '$min_price' AND '$max_price' ");

while($row=$r->fetch_assoc()){
	echo "<div class='pr_list'>";
		/*echo "<b>".$select_options."</b><br>";*/
		echo "<b>".$row['checkbox']."</b><br>";
		echo "<b>".$row['radio']."</b><br>";
		echo "<b>".$row['select_options']."</b><br>";
		echo "<img src='http://localhost/plugins/ajax-json-js-slider-checkbox-select/test1/images/uploaded/".$row['image']."' style='max-height:130px'><br>";
		echo "Cost Rs. ".$row['cost']."<br>";
		
	echo "</div>";
	
}

?>