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
if(!module_change_request::can_i('delete','Change Requests'))die('no perms');
$change_request_id = (int)$_REQUEST['change_request_id'];
$change_request = module_change_request::get_change_request($change_request_id);
if(!$change_request['website_id'])die('no linked website');
$website_data = module_website::get_website($change_request['website_id']);

if(module_form::confirm_delete('change_request_id',"Really delete Change Request?",module_website::link_open($change_request['website_id']))){
    module_change_request::delete_change_request($_REQUEST['change_request_id']);
    set_message("Change request deleted successfully");
    redirect_browser(module_website::link_open($change_request['website_id']));
}