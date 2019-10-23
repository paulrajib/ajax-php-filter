<?php
include "db.php";

$min_price=$_GET['min_price'];
$max_price=$_GET['max_price'];

//echo "Test min price".$min_price;

$r=$mysqli->query("SELECT * FROM product WHERE price BETWEEN '$min_price' AND '$max_price' ");

while($row=$r->fetch_assoc()){
	
	echo "<div class='pr_list'>";
		echo "<b>".$row['name']."</b><br>";
		//echo "<img src='http://localhost/plugins-dev/test2/images/uploaded/".$row['image']."' style='max-height:130px'><br>";
		//echo "Cost Rs. ".$row['price']."<br>";
		
	echo "</div>";
	
}

?>