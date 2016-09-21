<?php 

if(!class_exists('Product_Post_Type')){
	class Product_Post_Type{

		const POST_TYPE_PRODUCT	= "product";
		const TAXONOMY_CAT_PRODUCT = "danh-muc";
		protected $url_images;
		
		private $meta_box = array();

		/**
    	 * The Constructor
    	 */
    	public function __construct()
    	{

    		// register actions
    		add_action('init', array(&$this, 'init'));
    		add_action('admin_init', array(&$this, 'admin_init'));
    	
    	} // END

    	function create_metabox_variable(){
    		$this->meta_box[] = array(
			    'id' => 'product_properties',
			    'title' => __('Thông tin sản phẩm','nhienphan'),
			    'pages' => array(self::POST_TYPE_PRODUCT),
			    'fields' => array(
			        
			         array(
			            'name' => __('Mã hàng','nhienphan' ),
			            'id' => self::POST_TYPE_PRODUCT .'_sku',
			            'type' => 'text',
			        )
			        ,
			         array(
			            'name' => __('Giá gốc','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_price',
			            'type' => 'text',
			        )
			        ,
			        array(
			            'name' => __('Giá giảm','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_price_discount',
			            'type' => 'text',
			        )
			       
			        ,
			        array(
			            'name' => __('Hiển thị trang chủ','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_ishome',
			            'type' => 'checkbox_list',
			            'options'=>array(
			            	'true' => 'Có',
			            	),
			            'placeholder'=>'Vui lòng chọn',
			            'multiple' => false

			        ),
			         
			        /*
			         array(
			            'name' => __('Số lượng trong kho','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_inventory',
			            'type' => 'text',
			        )
			        ,
			        array(
			            'name' => __('Đơn vị tính','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_unit',
			            'type' => 'text',
			        )
			        ,
			         array(
			            'name' => __('Xuất xứ','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_origin',
			            'type' => 'text',
			        )
			        ,
			        
			        array(
			            'name' => __('Mùa trái cây','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_session',
			            'type' => 'checkbox_list',
			            'options'=>array(
			            	'T1' => 'T1',
			            	'T2' => 'T2', 
			            	'T3' => 'T3', 
			            	'T4' => 'T4', 
			            	'T5' => 'T5', 
			            	'T6' => 'T6', 
			            	'T7' => 'T7', 
			            	'T8' => 'T8', 
			            	'T9' => 'T9', 
			            	'T10' => 'T10', 
			            	'T11' => 'T11',  
			            	'T12' => 'T12', 
			            	),
			            'placeholder'=>'Vui lòng chọn',
			            'multiple' => true

			        )
			        ,*/
			       
			         array(
			            'name' => __('Hình ảnh thêm','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT .'_gallery',
			            'type' => 'image_advanced',
			        ),
			           array(
			            'name' => __('Short Description','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT .'_sort_description',
			            'type' => 'wysiwyg',
			        ),
			           array(
			            'name' => __('Video minh họa','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT .'_video',
			            'type' => 'wysiwyg',
			        ),
			        array(
			            'name' => __('File','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT . '_file1',
			            'type' => 'file',
			        ),
			        
			        /*   	
			        array(
			            'name' => __('Link xem thêm','nhienphan'),
			            'id' => self::POST_TYPE_PRODUCT .'_url_more',
			            'type' => 'text',
			        )*/
		     
		    		// Other fields go here
		    	)
			);
    	} 

    	/**
    	 * hook into WP's init action hook
    	 */
    	public function init()
    	{
    		// Initialize Post Type
    		$this->create_post_type();
    		//add_action('save_post', array(&$this, 'save_post'));

    		$this->create_product_taxonomies();

    		add_filter('manage_edit-product_columns', array(&$this,'product_columns'));

    		add_action('manage_posts_custom_column', array(&$this,'populate_columns'));

    		add_filter('manage_edit-product_sortable_columns', array(&$this,'sort_me'));

    		add_action('restrict_manage_posts', array(&$this,'product_category_filter_list'));

    		add_filter('parse_query', array(&$this,'perform_filtering_product_category'));


    	} // END public function init()

    	/**
    	 * hook into WP's admin_init action hook
    	 */
    	public function admin_init()
    	{			
    		// Add metaboxes
    		
    		$this->create_metabox_variable();
    		$this->create_meta_box();
    	} // END public function admin_init()

    	/**
    	 * Create the post type
    	 */
    	public function create_post_type()
    	{
    		
    		register_post_type(
				'product', array(
					'labels' => array(
						'name' => __('Product','nhienphan'),
						'singular_name' => __('Product','nhienphan'),
						'add_new' => __('Add New','nhienphan'),
						'add_new_item' => __('Add New Product','nhienphan'),
						'edit' => __('Edit','nhienphan'),
						'edit_item' => __('Edit Product','nhienphan'),
						'new_item' => __('New Product','nhienphan'),
						'view' => __('View Product','nhienphan'),
						'view_item' => __('View Product','nhienphan'),
						'search_items' => __('Search Products','nhienphan'),
						'not_found' => __('No Products found','nhienphan'),
						'not_found_in_trash' => __('No Products found in Trash','nhienphan')
					),
					'public' => true,
					'show_ui' => true,
					//'show_in_menu'=>'admin.php?page=nhienphan-manager',
					'publicy_queryable' => true,
					'exclude_from_search' => false,
					//'menu_position' => 21,
					'menu_icon' => $this->url_images . 'product.png',
					'hierarchical' => false,
					'query_var' => true,
					'supports' => array(
					'title', 'editor', 'comments', 'author', 'excerpt', 'thumbnail',
					'custom-fields'
					),
					'rewrite' => array('slug' => 'product', 'with_front' => false),
					//'taxonomies' =>  array('post_tag', 'category'),
					'can_export' => true,
					//'register_meta_box_cb'  =>  'call_to_function_do_something',
					'description' => __('Product description.','nhienphan')
				)
			);
			
    	}
    	/**
    	 * Create metabox
    	 */

    	public function create_meta_box(){
    		if (!class_exists('RW_Meta_Box')) {
    			echo 'Not have class';
          		return;
		    }

		    foreach ($this->meta_box as $mb) {
		    	//echo '<pre>';
		    	//var_dump($mb);
		        new RW_Meta_Box($mb);
		    }
    	}

    	/**
    	 * Save the metaboxes for this custom post type
    	 */
    	public function save_post($post_id)
    	{
            // verify if this is an auto save routine. 
            // If it is our form has not been submitted, so we dont want to do anything
            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            {
                return;
            }
            
    		if(isset($_POST['post_type']) && $_POST['post_type'] == self::POST_TYPE_PRODUCT && current_user_can('edit_post', $post_id))
    		{
    			foreach($this->_meta as $field_name)
    			{
    				// Update the post's meta field
    				update_post_meta($post_id, $field_name, $_POST[$field_name]);
    			}
    		}
    		else
    		{
    			return;
    		} // if($_POST['post_type'] == self::POST_TYPE && current_user_can('edit_post', $post_id))
    	} // END public function save_post($post_id)

    	
		
	
		/**
		 * called off of the taxonomies
		 */	

		function create_product_taxonomies() {
			//echo self::TAXONOMY_CAT_PRODUCT;
			register_taxonomy(self::TAXONOMY_CAT_PRODUCT, self::POST_TYPE_PRODUCT, array(
				'hierarchical' => true,
				'labels' => array(
				    'name' => __('Categories product','nhienphan'),
				    'singular_name' => __('Product Category','nhienphan'),
				    'add_new' => __('Add New','nhienphan'),
				    'add_new_item' => __('Add New Product Category','nhienphan'),
				    'new_item' => __('New Product Category','nhienphan'),
				    'search_items' => __('Search Product Category','nhienphan'),
				),
			));

			/**********************************************************
			
			register_taxonomy('type-product', 'product', array(
				'hierarchical' => true,
				'labels' => array(
				'name' => __('Loại hàng','nhienphan'),
				'singular_name' => __('Type Product','nhienphan'),
				'add_new' => __('Add New Type Product','nhienphan'),
				'add_new_item' => __('Add New Type Product Item','nhienphan'),
				'new_item' => __('New Category Type Item','nhienphan'),
				'search_items' => __('Search Type Product','nhienphan'),
				),
			));
			
			register_taxonomy('manufacture', 'product', array(
				'hierarchical' => true,
				'labels' => array(
				'name' => __('Manufacture'),
				'singular_name' => __('Manufacture'),
				'add_new' => __('Add Manufacture'),
				'add_new_item' => __('Add New Manufacture'),
				'new_item' => __('New Manufacture'),
				'search_items' => __('Search Manufacture'),
				),
			));
			******************************** */
		}

		function product_columns($columns) {
		    $columns['col_cat_product'] = __('Product Category','nhienphan');
		    //$columns['product_product_number'] = 'Number';
		    $columns['col_product_image'] = __('Product Image','nhienphan');
		    unset($columns['comments']);
		    unset($columns['author']);
		    return $columns;
		}

		function populate_columns($column) {

		    if ('col_cat_product' == $column) {
		        $terms = wp_get_post_terms(get_the_ID(), self::TAXONOMY_CAT_PRODUCT);
		        $col_cat_product = '';
		        foreach ($terms as $t) {
		            $term_link = get_term_link($t,self::TAXONOMY_CAT_PRODUCT);
		            $col_cat_product .= '<a href="' . $term_link . '" >' . $t->name . '</a>, ';
		        }

		        echo $col_cat_product;
		    } elseif ('col_product_image' == $column) {
		        $img_product_col = get_the_post_thumbnail(get_the_ID(), array(100, 100));
		        echo $img_product_col;
		    }
		}

		function sort_me($columns) {
		    $columns['col_cat_product'] = 'col_cat_product';
		    $columns['col_product_image'] = 'product_product_image';
		    return $columns;
		}

		/**
		 * Filters With Custom Taxonomy Category Product
		 */
		//add_action('restrict_manage_posts', 'product_category_filter_list');

		function product_category_filter_list() {
		    $screen = get_current_screen();
		    global $wp_query;
		    if ($screen->post_type == self::POST_TYPE_PRODUCT) {
		        wp_dropdown_categories(array(
		            'show_option_all' => __('Show All Product Category','nhienphan'),
		            'taxonomy' => self::TAXONOMY_CAT_PRODUCT,
		            'name' => self::TAXONOMY_CAT_PRODUCT,
		            'orderby' => 'name',
		            'selected' => ( isset($wp_query->query[self::TAXONOMY_CAT_PRODUCT]) ? $wp_query->query[self::TAXONOMY_CAT_PRODUCT] : '' ),
		            'hierarchical' => false,
		            'depth' => 5,
		            'show_count' => true,
		            'hide_empty' => false,
		        ));
		    }
		}
		/*
		 * Display Filtered Results
		 */
		//add_filter('parse_query', 'perform_filtering_product_category');

		function perform_filtering_product_category($query) {
		    $qv = &$query->query_vars;
		    if (( $qv[self::TAXONOMY_CAT_PRODUCT] ) && is_numeric($qv[self::TAXONOMY_CAT_PRODUCT])) {
		        $term = get_term_by('id', $qv[self::TAXONOMY_CAT_PRODUCT], self::TAXONOMY_CAT_PRODUCT);
		        $qv[self::TAXONOMY_CAT_PRODUCT] = $term->slug;
		    }
		}
	}
	// Check if class exists Product
	if(class_exists('Product_Post_Type')){
		$Product = new Product_Post_Type();
	}

}//end if class_exists