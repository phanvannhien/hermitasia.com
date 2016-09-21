<?php
	/*
	* Template Name: Product page
	*/
?>
<?php get_header() ?>
<div class="container">
	<div id="product-page" class="row bg-default">
		<div class="content-inner">
			<h2><?php the_title() ?></h2>
            <p>&nbsp;</p>
            <div class="row">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $loop = new WP_Query(array(
                        'post_type'=>'product',
                        'posts_per_page' => 16,
                        'paged' => $paged    
                    ));
                $i = 0;
                $total = $loop->post_count;
                while ( $loop->have_posts()) {
                    $loop->the_post();
                    global $post;
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="product-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <?php the_post_thumbnail(array(150,150),array('class' => 'img-fluid'))?>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <a class="product-name" href="<?php the_permalink()?>"><?php the_title()?></a>
                                <p><?php 
                                    echo get_post_meta($post->ID,'product_sort_description',true);
                                ?></p>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>                               
                    <?php
                }
                wp_reset_query();
				
			?>
			</div>
		</div>
		<div class="row">
            <div class="pagination">
                <?php
                    if (function_exists('wp_pagenavi'))
                        wp_pagenavi(array('type' => 'product', 'query' => $loop));
                ?>
            </div>
        </div>
	</div>
</div>
<?php get_footer() ?>
