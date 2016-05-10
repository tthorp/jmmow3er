<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
$cat = mysql_real_escape_string($_GET['cat']);
//query for products
$query="SELECT * FROM products WHERE category_id = $cat;";
$products = mysql_query($query) or die(mysql_error());
$count = mysql_num_rows($products);
define('TITLE',"J&M Mower, Proudly Celebrating ".YOS." Years of Service!");
head();
nav();
$count = 0;
while($row = mysql_fetch_array($products)){
	if($row['sale_price'] == 0){
		$price = '(Price not set, call us for more information.)';
	}else{
		$price = 'Price: $'.number_format($row['sale_price'], 2);
		if($row['status'] == 'Sold'){
			$price .= ' (Sold. New ones coming in soon.)';
		}
	}
	echo "<div class='product'><h3><a href='product.php?id=",$row['product_id'],"'>",$row['product_name'],"</a></h3>";
	$filename = "img/catalog/".$row['product_id'].".jpg";
	if (file_exists($filename)) {
		echo "<img src='$filename' width='300px' />";
	} else {
		echo "<h2>No<br />Image<br />Available</h2>";
	}
	echo "<p>$price</p></div>";
	if($count&1){
		echo "<div class='clear'></div>";
	}
	$count ++;
}
?>

<!--Page Content Ends Here-->
<?=foot()?>
