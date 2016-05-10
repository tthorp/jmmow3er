<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
define('TITLE',"Refurbishing a Locke 30\" Standard | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head(YOS);
nav();
?>

<h1>Refurbishing a Locke 30" Standard</h1>

<p>We don't have pictures of this Locke as it was brought to us, but we have a few pictures of the finished product. Because of the great quality with which Lock Mowers are built, we were able to completely restore it using our 5 step process.</p>
<ol>
	<li>Completely disassemble the mower</li>
	<li>Inspect all parts to determine which can be salvaged</li>
	<li>Sandblast, grind, refurbish and paint all eligible parts</li>
	<li>Order or manufacture replacement parts as needed</li>
	<li>Assemble, paint and test</li>
</ol>
<p>Click any of the following pictures for a larger version: </p>
<a href="img/model2/1.jpg"><img src="img/model2/1_sm.jpg" width="210" height="140" border="0"></a>
<a href="img/model2/2.jpg"><img src="img/model2/2_sm.jpg" width="210" height="140" border="0"></a>
<!--Page Content Ends Here-->
<?=foot()?>
