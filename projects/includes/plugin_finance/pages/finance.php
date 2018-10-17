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
//include("top_menu.php");




$module->page_title = _l('Finance');


$links = array();
$menu_position = 1;

array_unshift($links,array(
    "name"=>"Transactions",
    'm' => 'finance',
    'p' => 'finance',
    'default_page' => 'finance_list',
    'order' => $menu_position++,
    'menu_include_parent' => 0,
    'allow_nesting' => 0,
    'args' => array('finance_id'=>false),
));
if(module_finance::can_i('view','Finance Upcoming')){
    array_unshift($links,array(
        "name"=>"Upcoming Payments",
        'm' => 'finance',
        'p' => 'recurring',
        'order' => $menu_position++,
        'menu_include_parent' => 1,
        'allow_nesting' => 1,
        'args' => array('finance_id'=>false,'finance_recurring_id'=>false),
    ));
}

?>