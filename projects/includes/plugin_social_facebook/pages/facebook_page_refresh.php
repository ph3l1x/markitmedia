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

if(!module_social::can_i('edit','Facebook','Social','social')){
    die('No access to Facebook accounts');
}

$social_facebook_id = isset($_REQUEST['social_facebook_id']) ? (int)$_REQUEST['social_facebook_id'] : 0;
$facebook = new ucm_facebook_account($social_facebook_id);

$facebook_page_id = isset($_REQUEST['facebook_page_id']) ? (int)$_REQUEST['facebook_page_id'] : 0;

/* @var $pages ucm_facebook_page[] */
$pages = $facebook->get('pages');
if(!$facebook_page_id || !$pages || !isset($pages[$facebook_page_id])){
	die('No pages found to refresh');
}
?>
Manually refreshing page data...
<?php

$pages[$facebook_page_id]->graph_load_latest_page_data();
