<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
define('TITLE',"Not Found | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head();
?>
<div id="main">
	<h1>A 404 Error Has Occurred</h1>
    <p>That means that the address you requested was not found in this website.</p>
    <p>Please visit our <a href="/">homepage</a> and navigate from there. Thanks!</p>
</div><!--end main-->
<div class="clear"></div>
<!--Page Content Ends Here-->
<?=foot()?>
