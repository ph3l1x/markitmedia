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


// show all datas.
if(isset($_REQUEST['search_form'])){

	include("admin_data_search.php");

}else if(isset($_REQUEST['data_new'])){

	include("admin_data_new.php");
	
}else if(isset($_REQUEST['data_record_id']) && $_REQUEST['data_record_id'] ){
	//&& isset($_REQUEST['data_type_id']) && $_REQUEST['data_type_id']
	
	include("admin_data_open.php");
	
}else{
	
	include("admin_data_list.php");
}

