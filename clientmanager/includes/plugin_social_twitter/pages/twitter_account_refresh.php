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

if(!module_social::can_i('edit','Twitter','Social','social')){
    die('No access to Twitter accounts');
}

$social_twitter_id = isset($_REQUEST['social_twitter_id']) ? (int)$_REQUEST['social_twitter_id'] : 0;
$twitter_account = new ucm_twitter_account($social_twitter_id);


?>
Manually refreshing twitter data...
<?php

$twitter_account->import_data(true);
