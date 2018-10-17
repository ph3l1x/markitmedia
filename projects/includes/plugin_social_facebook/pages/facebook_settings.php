<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-04-28 23:26:42 
  * IP Address: 112.210.18.25
  */


if(_DEMO_MODE){
	?>
	<p>Demo Mode Notice: <strong>This is a public demo. Please only use TEST accounts here as others will see them.</strong></p>
	<?php
}


if(isset($_REQUEST['social_facebook_id']) && !empty($_REQUEST['social_facebook_id'])){
    $social_facebook_id = (int)$_REQUEST['social_facebook_id'];
	$social_facebook = module_social_facebook::get($social_facebook_id);
    include('facebook_account_edit.php');
}else{
	include('facebook_account_list.php');
}
