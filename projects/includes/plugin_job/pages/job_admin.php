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

$job_safe = true; // stop including files directly.
if(!module_job::can_i('view','Jobs')){
    echo 'permission denied';
    return;
}

if(isset($_REQUEST['job_id'])){

    if(isset($_REQUEST['email_staff'])){
        include(module_theme::include_ucm("includes/plugin_job/pages/job_admin_email_staff.php"));

    }else if(isset($_REQUEST['email'])){
        include(module_theme::include_ucm("includes/plugin_job/pages/job_admin_email.php"));

    }else if((int)$_REQUEST['job_id'] > 0){
        include(module_theme::include_ucm("includes/plugin_job/pages/job_admin_edit.php"));
        //include("job_admin_edit.php");
    }else{
        include(module_theme::include_ucm("includes/plugin_job/pages/job_admin_create.php"));
        //include("job_admin_create.php");
    }

}else{

    include(module_theme::include_ucm("includes/plugin_job/pages/job_admin_list.php"));
	//include("job_admin_list.php");
	
} 

