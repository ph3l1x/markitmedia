<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:13:26 
  * IP Address: 68.105.129.178
  */

$data_types = $module->get_data_types();

?>
<h2><?php echo _l('Select Type'); ?></h2>

<?php foreach($data_types as $data_type){
	?>
	
	<a class="uibutton" href="<?php echo $module->link('',array('data_type_id'=>$data_type['data_type_id'],'data_record_id'=>'new','mode'=>'edit'));?>"><?php echo $data_type['data_type_name'];?></a>
	
	<?php
}
?>
