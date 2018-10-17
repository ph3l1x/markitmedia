<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2014-04-21 08:00:26 
  * IP Address: 70.166.101.44
  */ 

if(module_data::can_i('edit',_MODULE_DATA_NAME)){

	// show all datas.
	if(isset($_REQUEST['data_field_id']) && $_REQUEST['data_field_id'] && isset($_REQUEST['data_type_id']) && $_REQUEST['data_type_id']){
		
		include("data_type_admin_field_open.php");
		
	}else if(isset($_REQUEST['data_field_group_id']) && $_REQUEST['data_field_group_id']){
		
		include("data_type_admin_group_open.php");
		
	}else if(isset($_REQUEST['data_type_id']) && $_REQUEST['data_type_id']){
		
		include("data_type_admin_open.php");
		
	}else{
		
		include("data_type_admin_list.php");
	}
	
}