<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
 <head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title><?php wp_title('|', true, 'right'); ?></title>
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
      <![endif]-->
      <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <div id="page" class="site">
          
            <div id="top">
                  <div class="container">
                       <div class="row">
                              <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                       </div>
                             
                        
                  </div>
            </div>
          
            
            