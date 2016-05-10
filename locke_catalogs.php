<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
define('TITLE',"Locke Catalogs | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head(YOS);
nav();
?>

<h1>Locke Catalogs</h1>
<img src="/new_catalog/img/cover.jpg" style="float:right;">
<p>For the convenience of our customers, J&amp;M Mower new offers the Locke component parts catalog online, for free. We sell all Lock parts - even those that are no longer in production at Locke Mower Company. In those cases, we manufacture our own versions of the parts for resale</p>
<p>Find the part number that you need and call us to order</p>
<h3>From the New Mower Catalogs (1988 and newer Locke's)</h3>
<ul>
<li><a href="/new_catalog/25_single.htm">25" single unit mower</a></li>
<li><a href="/new_catalog/30_single.htm">30" single unit mower</a></li>
<li><a href="/new_catalog/70_75_plain_triplex.htm">70" and 75" plain triplex</a></li>
<li><a href="/new_catalog/70_75_reverse_triplex.htm">70" and 75" reverse triplex</a></li>
</ul>

<!--Page Content Ends Here-->
<?=foot()?>
