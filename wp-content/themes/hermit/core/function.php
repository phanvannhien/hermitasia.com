<?php
	
	function getPostViews($postID) {
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if ($count == '') {
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	        return "1";
	    }
	    return $count . '';
	}

	function setPostViews($postID) {
	    $count_key = 'post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if ($count == '') {
	        $count = 0;
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '1');
	    } else {
	        $count++;
	        update_post_meta($postID, $count_key, $count);
	    }
	}

	function getThumbnailUrlByPost($postID) {
	     $imgID = get_post_thumbnail_id($postID); // lấy id của hình
	     $arrImages = wp_get_attachment_image_src($imgID, false, false); // lấy link hình featured
	     
	     return $arrImages[0]; // 0: link hình ; 1: width ; 2: height
	}

	function getThumbnailPost($postID,$width,$height) {
	    $src =  getThumbnailUrlByPost($postID);
	    if( $src == '' ){
	     	$src = get_template_directory_uri().'/image/no-image.png';
	     }
	    return aq_resize( $src, $width,$height, true );
	}

	function getThumbnailUrl($url,$width,$height) {
	    return aq_resize( $url, $width,$height, true );
	}

