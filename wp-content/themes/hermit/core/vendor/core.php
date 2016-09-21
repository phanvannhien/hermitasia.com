<?php
	
if ( ! defined( 'CORE_URL' ) )
    define ('CORE_URL',get_template_directory_uri().'/core');
  
if ( ! defined( 'CORE_DIR' ) )
    define ('CORE_DIR',TEMPLATEPATH.'/core');  

if ( ! defined( 'VENDOR_URL' ) )
    define ('VENDOR_URL',CORE_URL.'/vendor');
  
if ( ! defined( 'VENDOR_DIR' ) )
    define ('VENDOR_DIR',CORE_DIR.'/vendor');  


include(VENDOR_DIR.'/meta-box/meta-box.php');
include(CORE_DIR.'e.php');


require_once('aq_resizer.php');
require_once(CORE_DIR.'/theme-setting.php');
