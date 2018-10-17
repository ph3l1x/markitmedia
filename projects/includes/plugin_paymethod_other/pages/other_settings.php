<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:43:09 
  * IP Address: 68.105.129.178
  */


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

print_heading('Settings');
module_config::print_settings_form(
    array(
         array(
            'key'=>'payment_method_other_enabled',
            'default'=>0,
             'type'=>'checkbox',
             'description'=>'Enable Payment Method',
         ),
         array(
            'key'=>'payment_method_other_label',
            'default'=>'Other',
             'type'=>'text',
             'description'=>'Name this payment method',
         ),
    )
);

print_heading('Templates');
echo module_template::link_open_popup('paymethod_other');
echo module_template::link_open_popup('paymethod_other_details');
?>
