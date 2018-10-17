<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
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