<?php get_header() ?>

<section id="slider">
	<?php echo do_shortcode('[crellyslider alias="home"]');?>
</section>

<section class="main">
	<div class="container-fluid">
		<div id="hermit">
			<div id="cam2-section">
				<img src="<?php echo get_template_directory_uri().'/image/cam2.jpg'; ?>" alt="">
				<div id="bottom-cam2-section">
					<div id="cam2-section-content">
						<h3>Về CAM2</h3>
						<p><?php echo get_option('aboutcam2')?></p>
					</div>
				</div>

			</div>
			<div id="hermit-section">
				<div id="hermit-section-content">

					<h3>Về hermitasia</h3>
					<p><?php echo get_option('abouthermit')?></p>
					<p class="text-sm-center">
						<img src="<?php echo get_template_directory_uri().'/image/hermitasia-product.jpg'; ?>" alt="">
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div id="about-home" class="row">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<div id="banner-about">
							<img class="img-fluid" src="<?php echo get_template_directory_uri().'/image/home-about.png'; ?>" alt="">
						</div>
						
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<div id="content-about">
							<h3>Các sản phẩm <br> của chúng tôi</h3>
							<p><?php echo get_option('headingproducthome')?></p>
						</div>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>

	<div class="bottom">
		<div class="container-inner">
			<div class="container-fluid">
				<div class="row">
					<?php
						$query = new WP_Query(
							array(
								'post_type' => 'product',
								'posts_per_page' => 6,
								'meta_query' => array(
									array(
										'key'     => 'product_ishome',
										'value'   => 'true',
										'compare' => '=',
									),
								)
							)
						);

						if($query->have_posts()):
							while ($query->have_posts()):
								$query->the_post();
								# code...
							
							?>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12">
							<div class="product-items">
								<div class="prod-img">
									<a href="<?php the_permalink() ?>">
										<?php the_post_thumbnail('full',array('class'=>'img-fluid'))?>
						
									</a>
								</div>
								<div class="prod-name">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</div>
							</div>
						</div>
						<?php	
							endwhile;	
							endif;
							wp_reset_query();	
						?>
				</div>
			</div>	
		</div>
	</div>
	
</section>

<?php get_footer() ?>