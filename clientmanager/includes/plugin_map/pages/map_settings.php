<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2016-02-08 09:43:34 
  * IP Address: 68.2.230.98
  */


$settings = array(
     array(
        'key'=>'enable_customer_maps',
        'default'=>'1',
         'type'=>'checkbox',
         'description'=>'Enable Customer Maps',
     ),
     array(
        'key'=>'google_maps_api_key',
        'default'=>'AIzaSyDFYt1ozmTn34lp96W0AakC-tSJVzEdXjk',
         'type'=>'text',
         'description'=>'Google Maps API Key',
         'help' => 'This is required to get markers displaying on the map. If markers are not displaying please sign up for your own Google Maps/Geocoding API key and put it here.'
     ),
);
module_config::print_settings_form(
    array(
        'heading' => array(
            'title' => 'Map Settings',
            'type' => 'h2',
            'main' => true,
        ),
        'settings' => $settings,
    )
);
