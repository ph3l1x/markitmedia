
<div class="wp3changerequest_message_box">
    <p><strong><?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2014-04-21 08:00:26 
  * IP Address: 70.166.101.44
  */ _e('Hello, welcome to the change request wizard.');?></strong> <br/>
        <?php _e('This is a simple 3 step process that will allow you to request a website change from your web developer.');?>
        <?php if($change_history[1]>0){ ?>
            <?php _e('Your web developer has allocated you <strong>%d changes per %s</strong>, you have already made %d changes in the past %s.',$change_history[1],$change_history[2],$change_history[0],$change_history[2]); ?>
            <?php } ?></p>
</div>
<?php if($change_history[1] > 0 && $change_history[0] >= $change_history[1]){
    ?>
<h2>Change limit reached</h2>
<p>Sorry you have already used up your <strong><?php echo $change_history[1];?></strong> allocated change requests.</p>
<p>Please contact your web developer if you would like to increase this limit so you can request more changes.</p>
<input type="button" name="wp3changerequest" class="wp3changerequest_back wp3changerequest_button wp3changerequest_button_cancel" value="Close">
<?php
}
if($change_history[1] == 0 || $change_history[0] < $change_history[1]){
    ?>
    <div id="wp3changerequest_step1">
        <h2><?php _e('What would you like to do?');?></h2>
        <p><?php _e('Please click one of the buttons below.');?></p>
        <input type="button" name="wp3changerequest_btn1" class="wp3changerequest_this wp3changerequest_button wp3changerequest_button_arrow" value="<?php _e('Change THIS Page');?>">
        <input type="button" name="wp3changerequest_btn2" class="wp3changerequest_another wp3changerequest_button wp3changerequest_button_arrow" value="<?php _e('Change ANOTHER Page');?>">
        <input type="button" name="wp3changerequest_btn3" class="wp3changerequest_back wp3changerequest_button wp3changerequest_button_cancel" value="<?php _e('Cancel');?>">
    <?php } ?>