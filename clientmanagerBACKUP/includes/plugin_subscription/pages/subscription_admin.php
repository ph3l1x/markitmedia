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

$subscription_id = isset($_REQUEST['subscription_id']) && $_REQUEST['subscription_id'] != '';
if($subscription_id){
	$subscription = module_subscription::get_subscription($subscription_id);
    include('subscription_admin_edit.php');
}else{
	include('subscription_admin_list.php');
}
