<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2016-02-08 09:43:10 
  * IP Address: 68.2.230.98
  */

if(!module_customer::can_i('edit','Customer Settings','Config')){
	redirect_browser(_BASE_HREF);
}

$module->page_title = 'Customer Settings';

$links = array(
	array(
		"name"=>'Settings',
		'm' => 'customer',
		'p' => 'customer_settings_basic',
		'force_current_check' => true,
		'order' => 1, // at start.
		'menu_include_parent' => 1,
		'allow_nesting' => 1,
		'args'=>array('customer_id'=>false,'customer_type_id'=>false),
	),
	array(
		"name"=>'Customer Types',
		'm' => 'customer',
		'p' => 'customer_settings_types',
		'force_current_check' => true,
		'order' => 2, // at start.
		'menu_include_parent' => 1,
		'allow_nesting' => 1,
		'args'=>array('customer_id'=>false,'customer_type_id'=>false),
	),
);


if(file_exists(dirname(__FILE__).'/customer_signup.php')){
	$links[] = array(
		"name"=>'Signup Settings',
		'm' => 'customer',
		'p' => 'customer_signup',
		'force_current_check' => true,
		'order' => 3, // at start.
		'menu_include_parent' => 1,
		'allow_nesting' => 1,
		'args'=>array('customer_id'=>false),
	);
}

