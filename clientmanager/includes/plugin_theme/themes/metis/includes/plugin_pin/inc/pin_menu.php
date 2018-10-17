<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2016-02-08 09:43:56 
  * IP Address: 68.2.230.98
  */
$pins = $this->get_pins();
?>
<li class="" id="top_menu_pin">
	<a href="#">
		<i class="fa fa-thumb-tack"></i>
		<?php _e('Pins');?>
		<?php if(count($pins)){ ?>
			<span class="label label-info" id="current_timer_count"><?php echo count($pins);?></span>
		<?php } ?>
		<span class="fa arrow"></span>
	</a>
	<ul>
		<?php if(module_pin::can_i('create','Header Pin')){ ?>
		<li>
			<a href="#" id="pin_current_page"><?php _e('Pin Current Page +');?></a>
		</li>
		<?php } ?>
		<?php foreach($pins as $pin_id => $pin){ ?>
			<li rel="<?php echo $pin_id;?>">
				<div class="top_menu_pin_actions">
					<?php if(module_pin::can_i('edit','Header Pin')){ ?>
						<a href="#" class="top_menu_pin_edit">[e]</a>
					<?php } ?>
					<?php if(module_pin::can_i('delete','Header Pin')){ ?>
						<a href="#" class="top_menu_pin_delete">[x]</a>
					<?php } ?>
				</div>
				<a href="<?php echo $pin[0];?>" class="top_menu_pin_item"><?php echo htmlspecialchars($pin[1]);?></a>
			</li>
		<?php } ?>
	</ul>
	<form action="" method="post" id="pin_action_form">
		<input type="hidden" name="pin_process" value="pin_save">
		<input type="hidden" name="pin_id" id="pin_id" value="">
		<input type="hidden" name="current_url" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']);?>">
		<input type="hidden" name="current_title" id="pin_current_title" value="">
		<input type="hidden" name="pin_action" id="pin_action" value="">
	</form>
</li>