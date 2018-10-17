<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:42:11 
  * IP Address: 68.105.129.178
  */

$file_safe = true;
$file_id = isset($_REQUEST['file_id']) ? (int)$_REQUEST['file_id'] : false;

if($file_id && isset($_REQUEST['email'])){

    include(module_theme::include_ucm('includes/plugin_file/pages/file_admin_email.php'));

}else if(isset($_REQUEST['file_id'])){


	$ucm_file = new ucm_file( $file_id );
	$ucm_file->check_page_permissions();
	$file    = $ucm_file->get_data();
	$file_id = (int) $file['file_id']; // sanatisation/permission check

	if(isset($_REQUEST['bucket']) || (isset($file['bucket']) && $file['bucket'])){
	    include(module_theme::include_ucm('includes/plugin_file/pages/file_admin_bucket.php'));
	}else{
		include(module_theme::include_ucm('includes/plugin_file/pages/file_admin_edit.php'));
	}


}else{
	
    include(module_theme::include_ucm('includes/plugin_file/pages/file_admin_list.php'));
	
} 

