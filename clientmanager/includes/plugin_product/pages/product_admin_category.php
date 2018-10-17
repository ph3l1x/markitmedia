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


if(isset($_REQUEST['product_category_id']) && $_REQUEST['product_category_id'] != ''){
    $product_category_id = (int)$_REQUEST['product_category_id'];
    $product_category = module_product::get_product_category($product_category_id);
    include('product_admin_category_edit.php');
}else{
	include('product_admin_category_list.php');
}
