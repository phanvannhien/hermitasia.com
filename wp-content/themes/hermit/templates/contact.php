<?php
	/*
	*	Template Name: Contact
	*/
?>

<?php get_header() ?>
<div class="container">
	<div id="contact-page" class="row">
		<div class="content-inner">
			<h2><?php the_title() ?></h2>
			
			<?php
				while (have_posts()) {
					the_post();
					the_content();
					# code...
				}
			?>
		</div>
	</div>
</div>
<?php get_footer() ?>