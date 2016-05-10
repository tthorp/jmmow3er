<?php 
//load the configuration file and the templated elements of the page

require('inc/config.php');
connect('jmmower'); 
//query for products
$query="SELECT * FROM products ORDER BY product_name;";
$products = mysql_query($query) or die(mysql_error());



while($row = mysql_fetch_array($products)){
	if($row['sale_price'] == 0){
		$price = '(no price)';
	}else{
		$price = '$'.number_format($row['sale_price'], 2);
		if($row['status'] == 'Sold'){
			$price .= ' (Sold.)';
		}
	}
	echo "<p>",$row['product_id'],": ",$row['product_name']," $price</p>";
}
?>


