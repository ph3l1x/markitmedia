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


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

print_heading('Bank Transfer Settings');
module_config::print_settings_form(
    array(
         array(
            'key'=>'payment_method_banktransfer_enabled',
            'default'=>1,
             'type'=>'checkbox',
             'description'=>'Enable Payment Method',
         ),
         array(
            'key'=>'payment_method_banktransfer_label',
            'default'=>'Bank Transfer',
             'type'=>'text',
             'description'=>'Name this payment method',
         ),
    )
);

print_heading('Bank Transfer Templates');
echo module_template::link_open_popup('paymethod_banktransfer');
echo module_template::link_open_popup('paymethod_banktransfer_details');
?>
