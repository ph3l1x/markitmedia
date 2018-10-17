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

