<div class="widget-sidebar">
	<div class="box-content-widget">
		<ul class="cats-tax">
			<?php
		    	$tax_cat_product = 'danh-muc';
		        wp_list_categories(array(
	                'taxonomy'=> $tax_cat_product,
	                'show_count' => 0,
	                'hide_empty' => 0,
	                'title_li' => '<h3>Danh mục sản phẩm</h3>'
	            ));
		    ?>
		</ul>
	</div>
</div>