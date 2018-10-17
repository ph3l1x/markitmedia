<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:43:06 
  * IP Address: 68.105.129.178
  */


if(!module_config::can_i('edit','Settings')){
    redirect_browser(_BASE_HREF);
}

print_heading('Coinbase Settings');?>


<?php module_config::print_settings_form(
    array(
         array(
            'key'=>'payment_method_coinbase_enabled',
            'default'=>0,
             'type'=>'checkbox',
             'description'=>'Enable Coinbase Checkout',
         ),
         array(
            'key'=>'payment_method_coinbase_label',
            'default'=>'Bitcoin',
             'type'=>'text',
             'description'=>'Payment Method Label',
	         'help' => 'This will display on invoices as the name of this payment method.'
         ),
         array(
            'key'=>'payment_method_coinbase_api_key',
            'default'=>'',
             'type'=>'text',
             'description'=>'Your Coinbase API Key',
	         'help' => 'From https://coinbase.com/settings/api ',
         ),
         array(
            'key'=>'payment_method_coinbase_secret_key',
            'default'=>'',
             'type'=>'text',
             'description'=>'Your coinbase Secret Key ',
	         'help' => 'From https://coinbase.com/settings/api ',
         ),
         array(
            'key'=>'payment_method_coinbase_subscriptions',
            'default'=>0,
             'type'=>'checkbox',
             'description'=>'Enable Coinbase Subscriptions',
	         'help' => 'Coinbase only supports subscriptions that are: daily, weekly, every_two_weeks, monthly, quarterly, and yearly. So your invoice/subscription renewals will have to match these in order to work.',
         ),
         array(
            'key'=>'payment_method_coinbase_currency',
            'default'=>'',
             'type'=>'text',
             'description'=>'Which Currencies To Support',
             'help'=>'A comma separated list of currencies to support, eg: AUD,USD Leave this blank to support all currencies. If an invoice is in an unsupported currency then this payment method will not display.',
         ),
         array(
            'key'=>'payment_method_coinbase_limit_type',
            'default'=>'above',
             'type'=>'select',
	         'options' => array(
		         'above'=>_l('Greater Than...'),
		         'below'=>_l('Less Than...'),
	         ),
             'description'=>'Only show when invoice value is ...',
             'help'=>'Only show the bitcoin option if the dollar value is greater than or less than the below value.',
         ),
         array(
            'key'=>'payment_method_coinbase_limit_value',
            'default'=>'0',
             'type'=>'text',
             'description'=>'... this amount',
             'help'=>'What value to restrict bitcoin payments to',
         ),
         array(
            'key'=>'payment_method_coinbase_charge_percent',
            'default'=>0,
             'type'=>'text',
             'description'=>'Additional Charge (as %)',
             'help' => 'Example: 1.5 do not enter %% sign',
         ),
         array(
            'key'=>'payment_method_coinbase_charge_amount',
            'default'=>0,
             'type'=>'text',
             'description'=>'Additional Charge (as $)',
             'help' => 'Example: 1.5 do not enter $ sign',
         ),
         array(
            'key'=>'payment_method_coinbase_charge_description',
            'default'=>'Coinbase Fee',
             'type'=>'text',
             'description'=>'Additional Charge (Description)',
             'help' => 'This will show on the Invoice when paying via coinbase',
         ),
    )
); ?>

<?php print_heading('Coinbase setup instructions:');?>

<p>Please create an account from http://coinbase.com - please note you will require a USA bank account in order to be verified and receive funds. More details on their website.</p>
