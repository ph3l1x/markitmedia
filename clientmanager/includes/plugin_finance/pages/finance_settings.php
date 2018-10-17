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


if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

module_config::print_settings_form(array(
    'heading' => array(
        'title' => 'Dashboard Finance Settings',
        'main' => true,
        'type' => 'h2',
    ),
    'settings' => array(
         array(
            'key'=>'dashboard_income_summary',
            'default'=>1,
             'type'=>'checkbox',
             'description'=>'Show income summary on the dashboard.',
         ),
    )
)
);
