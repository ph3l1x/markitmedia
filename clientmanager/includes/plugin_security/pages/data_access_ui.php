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

$user_id = (int)$_REQUEST['user_id'];
// grab the users permissions:
// TODO - move this back into the security plugin - redundant code:
$level = $level = module_security::get_access_level($user_id);
$access_level = $level['access_level'];
$data_access = $level['data_access'];

if(!$access_level)$access_level=2; // default to user.

?>
		<script type="text/javascript">
			function set_data_access(){
				if($('#system_access select').val() == 1){
					$('#data_access').hide();
				}else{
					$('#data_access').show();
				}
			}
			$(function(){
				$('#system_access select').change(function(){
					set_data_access()
				});
				set_data_access();
			});
		</script>
<iframe src="about:blank" name="data_access_popup_frame" id="file_popup_iframe" style="display:none;"></iframe>
<form action="<?php echo $module->link();?>" method="post" target="data_access_popup_frame">
	<input type="hidden" name="_process" value="save_data_access_popup">
	<input type="hidden" name="user_id" value="<?php echo $user_id;?>">

	<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass">
		<tbody>
			<tr>
				<th>
					<?php echo _l('System Access'); ?>
				</th>
				<td id="system_access">
					<?php echo print_select_box(array(1=>'Administrator (access to everything)',2=>'Customer/User'),'access_level',$access_level,'',false); ?>
				</td>
			</tr>
			<tr id="data_access">
				<th>
					<?php echo _l('Data Access'); ?>
				</th>
				<td>
					<?php echo print_select_box(array(
						'mine'=>'My Site Only',
						'customer'=>'Customer Sites Only',
						//'all'=>'All Areas and Customers',
						),'data_access[site]',(isset($data_access['site']) ? $data_access['site'] : 'mine'),'',false); ?>
				</td>
			</tr>

		</tbody>
	</table>

</form>

<?php

exit;