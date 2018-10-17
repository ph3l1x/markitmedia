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


if(isset($_REQUEST['member_id'])){
    $links = array();

    $member_id = $_REQUEST['member_id'];
    if($member_id && $member_id != 'new'){
        $member = module_member::get_member($member_id);
        // we have to load the menu here for the sub plugins under member
        // set default links to show in the bottom holder area.

        array_unshift($links,array(
            "name"=>_l('Member:').' <strong>'.htmlspecialchars($member['first_name'] .' '.$member['last_name']).'</strong>',
            "icon"=>"images/icon_arrow_down.png",
            'm' => 'member',
            'p' => 'member_admin',
            'default_page' => 'member_admin_edit',
            'order' => 1,
            'menu_include_parent' => 0,
        ));
    }else{
        $member = array(
            'name' => 'New Member',
        );
        array_unshift($links,array(
            "name"=>"New Member Details",
            "icon"=>"images/icon_arrow_down.png",
            'm' => 'member',
            'p' => 'member_admin',
            'default_page' => 'member_admin_edit',
            'order' => 1,
            'menu_include_parent' => 0,
        ));
    }

}else{
    include('member_admin_list.php');
}