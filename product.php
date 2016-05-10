<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
$id = mysql_real_escape_string($_GET['id']);
//query for products
$query="SELECT * FROM products INNER JOIN categories ON products.category_id = categories.category_id WHERE product_id = $id;";
$product = mysql_query($query) or die(mysql_error());
while($row = mysql_fetch_array($product)){
	$id = $row['product_id'];
	define('TITLE', $row['product_name']." | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");
	head();
	nav();
	if($row['sale_price'] == 0){
		$price = '(Price not set, call us for more information.)';
	}else{
		$price = 'Price: $'.number_format($row['sale_price'], 2);
		if($row['status'] == 'Sold'){
			$price .= ' (Sold. New ones coming in soon.)';
		}
	}
	echo "<h1>",$row['product_name'],"</h1>";
	echo "<p>$price<br />";
	echo "<a href='products.php?cat=",$row['category_id'],"'>",$row['category_name'],"</a></p>";
	echo "<p>",$row['product_description'],"</p>";
	$filename = "img/catalog/".$row['product_id'].".jpg";
	if (file_exists($filename)) {
		echo "<img src='$filename' />";
		//echo "<img src='/img/catalog/$id.jpg' />";
	} else {
		echo "<h2>No<br />Image<br />Available</h2>";
	}
	$dir = "/var/www/jmmower.com/img/catalog/$id" ;
	$count = 1;
	if (is_dir($dir)) {
		if ($handle = opendir($dir)) {
			while (false !== ($file = readdir($handle))) {
				if ($file != '.' && $file != '..'){
					echo "<img src='/img/catalog/$id/$count.jpg' />";
					$count ++;
				}
			}
			closedir($handle);
		}
	}
}
?>

<!--Page Content Ends Here-->
<?=foot()?>
