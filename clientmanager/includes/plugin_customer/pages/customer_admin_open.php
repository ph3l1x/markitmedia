<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:13:19 
  * IP Address: 68.105.129.178
  */

$page_type = 'Customers';
$page_type_single = 'Customer';

if(module_customer::is_lead()){
    $page_type = 'Leads';
    $page_type_single = 'Lead';
}
if(!module_customer::can_i('view',$page_type)){
    redirect_browser(_BASE_HREF);
}

if(isset($customer_id)){
	// we're coming here a second time
}
$links = array();

$customer_id = $_REQUEST['customer_id'];
if($customer_id && $customer_id != 'new'){
	$customer = module_customer::get_customer($customer_id);
	// we have to load the menu here for the sub plugins under customer
	// set default links to show in the bottom holder area.

    if(!$customer || $customer['customer_id'] != $customer_id){
        redirect_browser('');
    }
    $class = '';
    if(isset($customer['customer_status'])){
         switch($customer['customer_status']){
             case _CUSTOMER_STATUS_OVERDUE:
                 $class = 'customer_overdue error_text';
                 break;
             case _CUSTOMER_STATUS_OWING:
                 $class = 'customer_owing';
                 break;
             case _CUSTOMER_STATUS_PAID:
                 $class = 'customer_paid success_text';
                 break;
         }
    }
	array_unshift($links,array(
		"name"=>_l(''.$page_type_single.': %s','<strong class="'.$class.'">'.htmlspecialchars($customer['customer_name']).'</strong>'),
		"icon"=>"images/icon_arrow_down.png",
		'm' => 'customer',
		'p' => 'customer_admin_open',
		'default_page' => 'customer_admin_edit',
		'order' => 1,
		'menu_include_parent' => 0,
	));
}else{
	$customer = array(
		'name' => 'New '.$page_type_single,
	);
	array_unshift($links,array(
		"name"=>'New '.$page_type_single.' Details',
		"icon"=>"images/icon_arrow_down.png",
		'm' => 'customer',
		'p' => 'customer_admin_open',
		'default_page' => 'customer_admin_edit',
		'order' => 1,
		'menu_include_parent' => 0,
	));
}
