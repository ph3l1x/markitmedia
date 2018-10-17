<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-04-28 23:26:47 
  * IP Address: 112.210.18.25
  */

if(!module_social::can_i('view','Twitter','Social','social')){
    die('No permissions to view Twitter accounts');
}

$twitter_accounts = module_social_twitter::get_accounts();

$header_buttons = array();
$header_buttons[] = array(
    'url' => module_social_twitter::link_open('new',false),
    'title' => 'Add New Twitter Account',
    'type' => 'add',
);

print_heading(array(
    'type' => 'h2',
    'title' => 'Twitter Accounts',
    'button' => $header_buttons,
));

?>

<table class="tableclass tableclass_full tableclass_rows">
    <thead>
    <tr class="title">
        <th><?php echo _l('Twitter Account Name'); ?></th>
        <th><?php echo _l('Last Checked'); ?></th>
       <!-- <th><?php /*echo _l('Twitter Searches'); */?></th>-->
    </tr>
    </thead>
    <tbody>
    <?php
    $c=0;
    foreach($twitter_accounts as $twitter_account){ ?>
        <tr class="<?php echo ($c++%2)?"odd":"even"; ?>">
            <td class="row_action">
                <?php echo module_social_twitter::link_open($twitter_account['social_twitter_id'],true,$twitter_account); ?>
            </td>
            <td>
                <?php
                echo print_date($twitter_account['last_checked'],true);
                ?>
            </td>
            <!--<td>
                <?php
/*
                */?>
            </td>-->
        </tr>
    <?php } ?>
  </tbody>
</table>