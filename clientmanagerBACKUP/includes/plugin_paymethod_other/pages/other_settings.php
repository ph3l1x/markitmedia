<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:14:46 
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
            'key'=>'payment_method_other_enabled_default',
            'default'=>1,
             'type'=>'checkbox',
             'description'=>'Available By Default On Invoices',
	         'help' => 'If this option is enabled, all new invoices will have this payment method available. If this option is disabled, it will have to be enabled on individual invoices.'
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
