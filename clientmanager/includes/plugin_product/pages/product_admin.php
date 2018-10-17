<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:14:59 
  * IP Address: 68.105.129.178
  */


if(isset($_REQUEST['product_id']) && $_REQUEST['product_id'] != ''){
    $product_id = (int)$_REQUEST['product_id'];
	$product = module_product::get_product($product_id);
    include('product_admin_edit.php');
}else{
	include('product_admin_list.php');
}
