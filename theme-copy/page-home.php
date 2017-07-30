<?php
	/* Template Name: Home Page */


$category = "Food Truck";

 get_header(); ?>
<div id="page-content">
	<?php get_template_part('loop', 'home'); ?>
	<h1><?php echo $category ?></h1>
</div>

<?php get_footer(); ?>
