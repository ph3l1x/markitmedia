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

// include this file to list some type of data
// supports different types of lists, everything from a major table list down to a select dropdown list

$display_type = 'table';
$allow_search = true;


switch($display_type){
	case 'table':
		
		$data_types = $module->get_data_types();
		foreach($data_types as $data_type){
			$data_type_id = $data_type['data_type_id'];
            if(isset($_REQUEST['data_type_id']) && $data_type_id != $_REQUEST['data_type_id'])continue;

            include('admin_data_list_type.php');

		}
		
		break;
	case 'select':
		
		break;
	default:
		echo 'Display type: '.$display_type.' unknown.';
		break;
}