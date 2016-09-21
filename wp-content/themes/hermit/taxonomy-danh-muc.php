<?php get_header() ?>
<div class="full-width-img">
<?php echo taxonomy_cover_image(get_queried_object()->term_id); ?>
</div>

<div class="bg-default">
<p>&nbsp;</p>
	<div class="container ">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
			<?php get_sidebar() ?>
		</div>
		<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<?php
		while (have_posts()) {
			the_post();
			?>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
				<div class="product-items">
					<div class="prod-img">
						<a href="<?php the_permalink() ?>">
							<img src="<?php echo getThumbnailPost( $post->ID, 320, 280 ) ?>"/>
						</a>
					</div>
					<div class="prod-name">
						<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
					</div>
				</div>
			</div>
			<?php
			# code...
		}
	?>
		<div class="row">
	        <div class="pagination">
	            <?php
	                if (function_exists('wp_pagenavi'))
	                    wp_pagenavi();
	                    //wp_pagenavi(array('type' => 'product', 'query' => $loop));
	            ?>
	        </div>
	    </div>
		</div>
	</div>
</div>
<?php get_footer() ?>