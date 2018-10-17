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


if(!module_finance::can_i('view','Finance Upcoming')){
    redirect_browser(_BASE_HREF);
}

if(isset($_REQUEST['finance_recurring_id']) && $_REQUEST['finance_recurring_id'] && isset($_REQUEST['record_new'])){
    include(module_theme::include_ucm(dirname(__FILE__).'/finance_edit.php'));
}else if(isset($_REQUEST['finance_recurring_id']) && $_REQUEST['finance_recurring_id']){
    //include("recurring_edit.php");
    include(module_theme::include_ucm(dirname(__FILE__).'/recurring_edit.php'));
}else{
    //include("recurring_list.php");
    include(module_theme::include_ucm(dirname(__FILE__).'/recurring_list.php'));
}