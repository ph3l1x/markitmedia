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
