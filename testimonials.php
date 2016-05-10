<?php 
//load the configuration file and the templated elements of the page
require('inc/config.php');
connect('jmmower'); 
define('TITLE',"Testimonials | J&M Mower, Proudly Celebrating ".YOS." Years of Service!");//what is the name of the page?
head(YOS);
nav();
?>

<h1>Testimonials</h1>
<img src="/img/testimonial1.jpg">
<p>Here are the happy owner (my father on right) and happy operator (my brother on left). We took it for a spin after returning yesterday. Runs quieter and cuts better than it has in 20+ years. Many thanks to you and Evan and the rest of the crew.
--Nick</p>
<hr />
<!--Page Content Ends Here-->
<?=foot()?>
