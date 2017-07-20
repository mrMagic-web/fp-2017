<?php
	/* Template Name: Home Page */

$background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );

 get_header(); ?>
<div id="page-content">
	<header class="home-visual" style="background-image: url('<?php echo $background[0]; ?>')">
		<section class="home-message-box">
		<h1><?php echo simple_fields_value('kv_title'); ?></h1>
		<p><?php echo simple_fields_value('kv_desc'); ?></p>
		<a href="<?php echo simple_fields_value('kv_read_more_link'); ?>">
			<?php echo simple_fields_value('kv_read_more_text'); ?>			
		</a>
		</section>
	</header>
	<section class="home-icons">
		<?php 
			$icon_values = simple_fields_values("icon_image,icon_title,icon_description");

				foreach ($icon_values as $values) {
					echo "<img src='" .  $values["icon_image"] . "' class='icon-image'>";
					echo "<h3>" . $values["icon_title"] . "</h3>";
					echo "<p>" . $values["icon_description"] . "</p>";
				}

			?>


	</section>

	<?php get_template_part('loop', 'home'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
