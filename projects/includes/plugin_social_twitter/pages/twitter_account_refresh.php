<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-04-28 23:26:47 
  * IP Address: 112.210.18.25
  */

if(!module_social::can_i('edit','Twitter','Social','social')){
    die('No access to Twitter accounts');
}

$social_twitter_id = isset($_REQUEST['social_twitter_id']) ? (int)$_REQUEST['social_twitter_id'] : 0;
$twitter_account = new ucm_twitter_account($social_twitter_id);


?>
Manually refreshing twitter data...
<?php

$twitter_account->import_data(true);
