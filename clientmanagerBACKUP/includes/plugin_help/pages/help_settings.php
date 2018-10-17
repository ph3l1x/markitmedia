<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:14:01 
  * IP Address: 68.105.129.178
  */


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

print_heading('Help Settings');

module_config::print_settings_form(
    array(
        array(
            'key'=>'help_only_for_admin',
            'default'=>1,
            'type'=>'checkbox',
            'description'=>'Only show help menu for Super Administrator.',
	        'help' => 'By default only the Super Administrator (first user created) can see the help documentation. If this option is disabled you will still need to give each User Role access to "view help" for them to see the "help" menu correctly. Please note that the help documentation may contain branding.'
        ),
    )
);
