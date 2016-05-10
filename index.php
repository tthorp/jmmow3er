<?php
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower');
define('TITLE',"J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head(YOS);
nav();
?>

<h1>Welcome to J&amp;M Mower; the best Locke mower rebuilding shop in the world.</h1>
<p>I am Mike Boutiette and I love working on high quality outdoor power machines. They represent a level of quality that does not exist in currently manufactured models and I am dedicated to rebuilding and refurbishing to new or better-than-new condition.</p>
<h2>Services</h2> 
<p>Repair, rebuilding and reservicing of select, high-quality machines</p>
<ul>
	<li>Locke Mowers</li>
	<li>Gravely Mowers</li>
	<li>Ariens Mowers and Snowblowers</li>
</ul>

<!--Page Content Ends Here-->
<?=foot()?>
