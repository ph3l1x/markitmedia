<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:44:11 
  * IP Address: 68.105.129.178
  */
$fieldset_data = array(
    'heading' => array(
        'type' => 'h3',
        'title' => isset($title) ? $title : 'Primary Contact Details',
    ),
    'class' => 'tableclass tableclass_form tableclass_full',
    'elements' => array(),
);
/*if($customer['primary_user_id']){
    $fieldset_data['heading']['button'] = array(
        'title' => 'More',
        'url' => module_user::link_open_contact($customer['primary_user_id'],false)
    );
}*/
if(isset($use_master_key) && ($use_master_key == 'customer_id' || $use_master_key == 'vendor_id') && isset($user[$use_master_key])){
    $primary = false;
	if($use_master_key=='customer_id') {
		$customer_data = module_customer::get_customer( $user[ $use_master_key ] );
		if ( $customer_data['primary_user_id'] == $user_id ) {
			$primary = true;
		}
	}else if($use_master_key == 'vendor_id'){
		$vendor_data = module_vendor::get_vendor( $user[ $use_master_key ] );
		if ( $vendor_data['primary_user_id'] == $user_id ) {
			$primary = true;
		}
	}
    if($primary && !isset($hide_more_button)){
        $fieldset_data['heading']['button'] = array(
            'title' => 'More',
            'url' => module_user::link_open_contact($user_id,false)
        );
    }
    $fieldset_data['elements']['primary'] = array(
        'title' => 'Primary',
        'fields' => array(
            array(
                'type' => 'check',
                'name' => 'customer_primary',
                'value' => '1',
                'checked' => $primary,
            ),
            _hr('This users details will be used as a primary point of contact for this customer. These details will display in the main customer listing for this customer. Also if you send an invoice or a newsletter to this "customer" then this email address will be used.'),
        )
    );
}else if(isset($show_more_button) && $show_more_button){
	$fieldset_data['heading']['button'] = array(
        'title' => 'More',
        'url' => module_user::link_open_contact($user_id,false)
    );
}
$fieldset_data['elements']['fname'] = array(
    'title' => 'First Name',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'name',
            'value' => $user['name'],
        ),
    )
);
$fieldset_data['elements']['last_name'] = array(
    'title' => 'Last Name',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'last_name',
            'value' => $user['last_name'],
        ),
    )
);
$fieldset_data['elements']['email'] = array(
    'title' => 'Email Address',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'email',
            'value' => $user['email'],
        ),
    )
);
$fieldset_data['elements']['phone'] = array(
    'title' => 'Phone',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'phone',
            'value' => $user['phone'],
        ),
    )
);
$fieldset_data['elements']['mobile'] = array(
    'title' => 'Mobile',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'mobile',
            'value' => $user['mobile'],
        ),
    )
);
$fieldset_data['elements']['fax'] = array(
    'title' => 'Fax',
    'fields' => array(
        array(
            'type' => 'text',
            'name' => 'fax',
            'value' => $user['fax'],
        ),
    )
);
if(class_exists('module_language',false) && isset($user['language'])){
    $attr = array();
    foreach(module_language::get_languages_attributes() as $langauge){
        $attr[$langauge['language_code']] = $langauge['language_name'];
    }
    $fieldset_data['elements']['language'] = array(
        'title' => 'Language',
        'fields' => array(
            array(
                'type' => 'select',
                'name' => 'language',
                'options' => $attr,
                'value' => $user['language'],
            ),
        )
    );
}
if(isset($user['user_id']) && (int)$user['user_id']> 0){
    if(class_exists('module_extra') && module_extra::is_plugin_enabled()){
        $fieldset_data['extra_settings'] =  array(
            'owner_table' => 'user',
            'owner_key' => 'user_id',
            'owner_id' => $user['user_id'],
            'layout' => 'table_row',
             // only allow if user perms.
             'allow_new' => module_user::can_i('create','Contacts','Customer'),
             'allow_edit' => module_user::can_i('create','Contacts','Customer'),
        );
    }
}
echo module_form::generate_fieldset($fieldset_data);
unset($fieldset_data);
?>


	<input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />