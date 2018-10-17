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


if(isset($_REQUEST['product_category_id']) && $_REQUEST['product_category_id'] != ''){
    $product_category_id = (int)$_REQUEST['product_category_id'];
    $product_category = module_product::get_product_category($product_category_id);
    include('product_admin_category_edit.php');
}else{
	include('product_admin_category_list.php');
}
