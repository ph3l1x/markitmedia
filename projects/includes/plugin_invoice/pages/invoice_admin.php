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

$invoice_safe = true;

if(isset($_REQUEST['print'])){
    include(module_theme::include_ucm("includes/plugin_invoice/pages/invoice_admin_print.php"));
        //include('invoice_admin_print.php');
}else if(isset($_REQUEST['invoice_id'])){

    if(isset($_REQUEST['email'])){
        include(module_theme::include_ucm("includes/plugin_invoice/pages/invoice_admin_email.php"));
        //include('invoice_admin_email.php');
    }else{
        /*if(module_security::getlevel() > 1){
            include('invoice_customer_view.php');
        }else{*/
            include(module_theme::include_ucm("includes/plugin_invoice/pages/invoice_admin_edit.php"));
            //include("invoice_admin_edit.php");
        /*}*/
    }

}else{

    include(module_theme::include_ucm("includes/plugin_invoice/pages/invoice_admin_list.php"));
	//include("invoice_admin_list.php");
	
} 

