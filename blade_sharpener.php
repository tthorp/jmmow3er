<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
define('TITLE',"Blade Sharpener | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head(YOS);
nav();
?>

<h1>Blade Sharpener</h1>
<p>Our sharpener is a <a href="http://www.foleyunited.com/products/reel/accu652/accu652_main.htm" target="new">Foley ACCU-Master</a> spin and relief grinder. CNC controlled machine capable of razor sharpness (+- 5/10,000ths of an inch). Don't tear your grass, cut it!</p>

<img src="img/066.JPG" alt="sharpener">

<!--Page Content Ends Here-->
<?=foot()?>
