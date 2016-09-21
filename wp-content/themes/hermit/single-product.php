<?php get_header() ?>

<div id="product-page" >
	<div class="full-width-img">
		<img src="<?php echo get_option('productsinglebanner')?>" class="img-fluid m-x-auto" alt="">
	</div>
	

	<?php
		while (have_posts()) {
			the_post();
			?>
			<div class="bg-default">
				<p>&nbsp;</p>
				<div class="container">
					<div class="row ">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<img  class="img-fluid m-x-auto d-block" src="<?php echo getThumbnailPost( $post->ID, 300, 300 ) ?>"/>
							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<h2><?php the_title() ?></h2>
							<p><?php echo get_post_meta($post->ID,'product_sku',true) ?></p>
							<p><?php echo rwmb_meta( 'product_sort_description' ); ?></p>
							<?php
								$files = rwmb_meta( 'product_file1', 'type=file' );  
								if( count($files > 0) ){
									echo '<ul>';
									foreach ($files as $file) {
										# code...
										?>
										<li>
											<a target="_blank" href="<?php echo $file['url'] ?>"> <?php echo $file['title'] ?> </a>
										</li>
										
										<?php
									}
									echo '</ul>';
								}
							?>
						</div>
					</div>
					<p>&nbsp;</p>
				</div>

			</div>
			<div class="bg-gray">
				<div class="container">
					<p>&nbsp;</p>
					<h3 class="title-red">CHI TIẾT SẢN PHẨM</h3>
					<?php the_content(); ?>
				</div>
			</div>
			<?php
			
			# code...
		}
	?>
	<div class="product-related">
		<div class="container">
			<h3 class="title-white">
				Các sản phẩm liên quan
			</h3>
			<div class="row">
			<?php
	            $product_related = new WP_Query(array(
	                'post_type' => 'product',
	                'posts_per_page' => 12,
	                'posts__not_in' => get_the_ID()
	                 )
	            );
	            $i =0;
	            while ( $product_related->have_posts()) {
	                # code...
	                $product_related->the_post();
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
	            <?php }?>    
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>
