<?php
	/*
	*	Template Name: About
	*/
?>

<?php get_header() ?>
<div class="container">
	<div class="row">
		<?php the_post_thumbnail('full',array('class'=> 'img-fluid')) ?>
	</div>
</div>
<div class="container">
	<div id="about-page" class="row bg-default">
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