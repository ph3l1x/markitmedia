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

$user_id = (int)$_SESSION['_user_id'];
	
if($user_id){ 
	$user = $module->get_user($user_id);
	//$user_notes = $module->get_user_notes($user_id);
	?>
	
	<h2><?php echo _l('Your Details'); ?></h2>
	
	
	<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass">
	  <tr>
	  	<td width="13%"><?php echo _l('Full Name'); ?></td>
	    <td width="37%"><?php echo ($user['name']); ?></td>
	     <td width="13%">
	     
	     </td>
	    <td width="37%"> </td>
	  </tr>
	  <tr>
	    <td><?php echo _l('Email Address'); ?></td>
	    <td><?php echo ($user['email']); ?></td>
	    <td></td>
	    <td></td>
	  </tr>
	  
	 
	  <tr>
	    <td><?php echo _l('Phone'); ?></td>
	    <td><?php echo ($user['phone']); ?></td>
	  </tr>
	  <tr>
	    <td><?php echo _l('Fax'); ?></td>
	    <td><?php echo ($user['fax']); ?></td>
	  </tr>
	  <tr>
	    <td><?php echo _l('Mobile'); ?></td>
	    <td><?php echo ($user['mobile']); ?></td>
	  </tr>
	 
	</table>
	
<?php  }  ?>