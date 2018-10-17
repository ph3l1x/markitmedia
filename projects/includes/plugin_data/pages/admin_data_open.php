<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2015-01-24 12:41:50 
  * IP Address: 68.105.129.178
  */

// when a particular data entry is opened, this page is displayed.
// this reads the layout of the page structure from the database (configured through the drag/drop settings) and displays the info.

// we could pass rendering this type of layout off to one of the /layout/ 

// this file could be included multiple times from within itself, maybe... so we do some if(!isset()) checking first..

 
$view_revision_id = (isset($_REQUEST['revision_id'])) ? $_REQUEST['revision_id'] : false;


if(!isset($data_record_id) || !$data_record_id){
	$data_record_id = $_REQUEST['data_record_id'];
	if($data_record_id && $data_record_id != 'new'){
		$data_record = $module->get_data_record($data_record_id);
		$data_type_id = $data_record['data_type_id']; // so we dont have to pass it in all the time.
		$data_record_revision_id = $data_record['last_revision_id'];
		if($view_revision_id){
			$data_record_revision_id = $view_revision_id;
		}
		$data_items = $module->get_data_items($data_record_id,$data_record_revision_id);
		//$data_notes = $module->get_notes($data_record_id);
		$create_user = module_user::get_user($data_record['create_user_id']);
		/*if($data_record['create_user_id']){
			// hack to get the name of the login from a custom login box.
			$user_login = module_user::get_user($data_record['create_user_id']);
			if($user_login['name']){
				$create_user['name'] .= ' (' . htmlspecialchars($user_login['name']).')';
			}
		}*/
		$update_user = module_user::get_user($data_record['update_user_id']);
		/*if($data_record['update_user_id']){
			// hack to get the name of the login from a custom login box.
			$user_login = module_user::get_user($data_record['update_user_id']);
			if($user_login['name']){
				$update_user['name'] .= ' (' . htmlspecialchars($user_login['name']).')';
			}
		}*/
		$revision_count = 1; // get list of history.
		$data_record_revisions = $module->get_data_record_revisions($data_record_id);
		$revision_count = count($data_record_revisions);
		
		/*if(getlevel()!="administrator" && $data_record['create_user_id'] != $_SESSION['_user_id']){
			// dodgy security check. but works.
			echo 'Sorry, you do not have permission to access this record';
			exit;
		}*/

		// record that a record was accessed 
		$module->record_access($data_record_id);
		
	}else{
		// for printing otu the summary:
		$data_record['status'] = 'New';
		$data_record['data_record_id'] = $module->next_record_id();
		$data_record['create_ip_address'] = $_SERVER['REMOTE_ADDR'];
		$data_record['update_ip_address'] = '';
		$data_record['create_user_id'] = module_security::get_loggedin_id();
		$data_record['date_created'] = time();
		$data_record['date_updated'] = false;
		$data_record['parent_data_record_id'] = isset($_REQUEST['parent_data_record_id']) ? (int)$_REQUEST['parent_data_record_id'] : 0;
		$update_user = $create_user = module_user::get_user($data_record['create_user_id']);
		$data_record_revisions = array();
		$data_record_revision_id = false;
		$revision_count = 0;
		$data_items = array();
	}
}



if(!isset($data_type_id) || !$data_type_id){
	$data_type_id = isset($_REQUEST['data_type_id']) ? (int)$_REQUEST['data_type_id'] : false;
}
if(!isset($data_type) || !$data_type){
	if($data_type_id){
		$data_type = $module->get_data_type($data_type_id);
	}else{
		die('No data type, please try again');
	}
}

if(!$module->can_i('view',$data_type['data_type_name'])){
    die('no permissions');
}


if(!isset($data_field_groups) || !$data_field_groups){
	$data_field_groups = $module->get_data_field_groups($data_type_id);
}

$rendered_field_groups = array();

// starting work on form error handling:
$GLOBALS['form_id'] = 'data_form';


$mode = (isset($_REQUEST['mode']) && $_REQUEST['mode']) ? $_REQUEST['mode'] : 'view'; // edit revisions
$show_incident_menu = true; 

if(isset($_SESSION['admin_mode']) && $_SESSION['admin_mode'] && !isset($_REQUEST['mode'])){
	$mode = 'admin';
}

if(isset($_REQUEST['print'])){
	$show_incident_menu = false;
	ob_start();
}

?>

<div id="incident_nav_wrap">
	<?php if($show_incident_menu){ ?>
	<ul id="incident_nav">
		<?php if($data_record_id && $data_record_id != 'new'){ ?>
            <?php if($data_record['parent_data_record_id']){
                $parent_data_record = $module->get_data_record($data_record['parent_data_record_id']);
                ?>
            <li class="">
                <a href="<?php echo $module->link('',array(
                    'data_type_id' => $parent_data_record['data_type_id'],
                    'data_record_id' => $data_record['parent_data_record_id'],
                    'mode' => 'view',
                ));?>">&laquo; Return</a>
            </li>
            <?php } ?>
            <li class="<?php echo ($mode=='view')?'link_current':'';?>">
                <a href="<?php echo $module->link('',array(
                    'data_type_id' => $data_type_id,
                    'data_record_id' => $data_record_id,
                    'mode' => 'view',
                ));?>">View</a>
            </li>
            <?php if($module->can_i('edit',$data_type['data_type_name'])){ ?>
            <li class="<?php echo ($mode=='edit')?'link_current':'';?>">
                <a href="<?php echo $module->link('',array(
                    'data_type_id' => $data_type_id,
                    'data_record_id' => $data_record_id,
                    'mode' => 'edit',
                ));?>">Edit</a>
            </li>
            <?php } ?>
            <li class="<?php echo ($mode=='revisions')?'link_current':'';?>">
                <a href="<?php echo $module->link('',array(
                    'data_type_id' => $data_type_id,
                    'data_record_id' => $data_record_id,
                    'mode' => 'revisions',
                ));?>">Revisions</a>
            </li>
            <li>
                <a href="<?php echo $_SERVER['REQUEST_URI'].'&print=true';?>" onclick="window.open(this.href,'pop','width=900,height=700,scrollbars=1'); return false;">Print</a>
            </li>
            <?php if($module->can_i('edit',_MODULE_DATA_NAME)){ ?>
            <li class="<?php echo ($mode=='admin')?'link_current':'';?>">
                <a href="<?php echo module_data::link_open_data_type($data_type_id);?>">Settings</a>
            </li>
            <?php } ?>
		<?php }else{ /*?>
            <li class="<?php echo ($mode=='edit')?'link_current':'';?>">
                <a href="<?php echo $module->link('',array(
                    'data_type_id' => $data_type_id,
                    'data_record_id' => $data_record_id,
                    'mode' => 'edit',
                ));?>">Create</a>
            </li>
		<?php */ } ?>
	</ul>
	<?php } ?>
	<div id="incident_content">
	
		<div id="revisions" style="<?php if($mode!='revisions'){ ?>display:none;<?php } ?>">
			<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_rows">
				<thead>
				<tr class="title">
			    	<th><?php echo _l('Revision #'); ?></th>
			        <th><?php echo _l('Date'); ?></th>
			        <!-- <th><?php echo _l('Status'); ?></th> -->
			        <th><?php echo _l('User'); ?></th>
			        <th><?php echo _l('What Fields Were Changed'); ?></th>
			    </tr>
			    </thead>
			    <tbody>
			    <?php 
			    $x=1;
			    $c=1;
			    $current_revision = array();
			    $last_revision_id = false;
			    $next_revision_id = false;
			    $previous_revision_id = false;
			    $temp_revision_id = -1;
			    $custom_highlight_fields = array();
			    foreach($data_record_revisions as $data_record_revision){
					$user = module_user::get_user($data_record_revision['create_user_id']);
					if($previous_revision_id && !$next_revision_id){
						$next_revision_id = $data_record_revision['data_record_revision_id'];
					}
					if($data_record_revision['data_record_revision_id'] == $view_revision_id){
						$current_revision = $data_record_revision;
						$current_revision['number'] = $x;
						$previous_revision_id = $temp_revision_id;
					}
					$temp_revision_id = $data_record_revision['data_record_revision_id'];
					?>
			        <tr class="<?php echo ($c++%2)?"odd":"even"; ?>">
			            <td class="row_action"><a href="<?php echo $module->link('',array("data_type_id"=>$data_type_id,"data_record_id"=>$data_record_id,"revision_id"=>$data_record_revision['data_record_revision_id']));?>">#<?php echo $x++;?></a></td>
			            <td><?php echo print_date($data_record_revision['date_created'],true); ?></td>
			            <!-- <td><?php echo $data_record_revision['status'];?></td> -->
			            <td><?php echo $user['name'];?> (<?php echo $data_record_revision['create_ip_address'];?>)</td>
			            <td>
			            	<?php if($x==2){
			            		echo 'Initial Version';
			            	}else{
			            		// find out changed fields.
			            		$sql = "SELECT * FROM `"._DB_PREFIX."data_store` WHERE data_record_revision_id = '".$data_record_revision['data_record_revision_id']."' AND data_record_id = '".$data_record_id."'";
			            		$res = qa($sql);
			            		if(!count($res)){
			            			echo 'no changes';
			            		}
			            		foreach($res as $field){
			            			$field_data = @unserialize($field['data_field_settings']);
			            			echo isset($field_data['title']) ? $field_data['title'].',' : '';
			            		}
			            	}
			            	?>
			            </td>
			        </tr>
			      <?php } ?>
			      </tbody>
			</table>
		</div>
		<?php
		switch($mode){
			case 'view':
				// view the most recent revision, or the specified revision.
				if(!$view_revision_id){
					end($data_record_revisions);
					$current_revision = current($data_record_revisions);
					$current_revision['number'] = count($data_record_revisions);
					$view_revision_id = $current_revision['data_record_revision_id'];
					$current_revision = array(); // delete this if you want to display view revisions at the top.
				}
				if($current_revision && $view_revision_id){
					// user wants a custom revision, we pull out the custom $data_field_groups
					// and we tell the form layout to use the serialized cached field layout information
					$data_field_groups = unserialize($current_revision['field_group_cache']);
					// we dont always read from cache, because then any ui changes wouldn't be reflected in older reports (if we want to change older reports)
				}
			case 'edit':
				// edit the latest revision.

				
				if($view_revision_id && $current_revision){


                    print_heading(array(
                        'type' => 'h2',
                        'title' => 'Viewing Revision: #' . $current_revision['number'].' - '. print_date($current_revision['date_created']),
                    ));

					?>
					<!--
					<a href="<?php echo $module->link('',array("data_type_id"=>$data_type_id,"data_record_id"=>$data_record_id));?>">&laquo; Cancel and return to editor</a> <br>
					-->
					
					<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_rows">
					<thead>
					<tr class="title">
				    	<th><?php echo _l('Revisions'); ?></th>
				        <th><?php echo _l('Date'); ?></th>
				        <th><?php echo _l('User'); ?></th>
				        <th><?php echo _l('What Changed'); ?></th>
				    </tr>
				    </thead>
				    <tbody>
						<tr class="odd">
							<td valign="top">
								<?php if($previous_revision_id>0){ ?>
									<?php echo create_link("&laquo; Previous","link",$module->link('',array("data_type_id"=>$data_type_id,"data_record_id"=>$data_record_id,"revision_id"=>$previous_revision_id))); ?>
								<?php } ?>
								
								<?php if($next_revision_id){ 
									echo create_link("Next &raquo;","link",$module->link('',array("data_type_id"=>$data_type_id,"data_record_id"=>$data_record_id,"revision_id"=>$next_revision_id))); 
								} ?>
							</td>
							<td><?php echo print_date($current_revision['date_created'],true); ?></td>
				            <td><?php echo $user['name'];?> (<?php echo $current_revision['create_ip_address'];?>)</td>
				            <td>
				            	<?php if($current_revision['number']==1){
				            		echo 'Initial Version';
				            	}else{
				            		// find out changed fields.
				            		$sql = "SELECT * FROM `"._DB_PREFIX."data_store` WHERE data_record_revision_id = '".$current_revision['data_record_revision_id']."' AND data_record_id = '".$data_record_id."'";
				            		$res = qa($sql);
				            		if(!count($res)){
				            			echo 'no changes';
				            		}
				            		foreach($res as $field){
				            			//if($current_revision['data_record_revision_id'] == $view_revision_id){
				            				$custom_highlight_fields[$field['data_field_id']]=true;
				            			//}
				            			$field_data = unserialize($field['data_field_settings']);
				            			echo $field_data['title'].',';
				            		}
				            	}
				            	?>
				            </td>
						</tr>
						</tbody>
					</table>
					
					<?php
				}

                $module->page_title = htmlspecialchars($data_type['data_type_name']);

                print_heading(array(
                    'main' => true,
                    'type' => 'h2',
                    'title' => htmlspecialchars($data_type['data_type_name']),
                ));
				?>
					

				<form action="" method="post" class="validate" enctype="multipart/form-data">
				<?php if(!$view_revision_id){ ?>
				<input type="hidden" name="form_id" value="<?php echo $GLOBALS['form_id'];?>">
				<input type="hidden" name="_process" value="save_data_record" />
				<input type="hidden" name="_redirect" value="<?php echo $module->link("",array("saved"=>true,"data_type_id"=>$data_type_id,"data_record_id"=>$data_record_id)); ?>" />
				<input type="hidden" name="data_record_id" value="<?php echo $data_record_id; ?>" />
				<input type="hidden" name="parent_data_record_id" value="<?php echo (int)$data_record['parent_data_record_id']; ?>" />
				<input type="hidden" name="data_type_id" value="<?php echo $data_type_id; ?>" />
				<input type="hidden" name="data_save_hash" value="<?php echo $module->save_hash($data_record_id,$data_type_id); ?>" />
                    <?php foreach($module->get_data_link_keys() as $key){
                        if(isset($_REQUEST[$key])){
                            ?>
                            <input type="hidden" name="<?php echo $key;?>" value="<?php echo (int)$_REQUEST[$key];?>">
                            <?php
                        }
                    }
                }

				// time to format the fields onto the page.
				// fields goes into groups.
				
				foreach($data_field_groups as $data_field_group){
					$data_field_group_id = $data_field_group['data_field_group_id'];
					include('render_group.php');
				}
                if(!$view_revision_id){ ?>

                    <p>
                            <input type="submit" name="butt_save" id="butt_save" value="<?php echo _l('Save Information'); ?>" class="submit_button save_button">
                        <?php if((int)$data_record_id > 0 && $module->can_i('delete',$data_type['data_type_name'])){ ?>
                            <input type="submit" name="butt_del" id="butt_del" value="<?php echo _l('Delete'); ?>" class="submit_button delete_button">
                        <?php } ?>
                            <input type="button" name="cancel" value="<?php echo _l('Cancel'); ?>" onclick="window.location.href='<?php
                            if($data_record['parent_data_record_id']){
                                echo $module->link('',array("data_record_id"=>$data_record['parent_data_record_id']));
                            }else{
                                echo $module->link('',array('data_type_id'=>$data_type_id)); }
                            ?>';" class="submit_button" />
					</p>
				<?php } ?>
				</form>
				<hr class="clear">
				<?php
				break;
		}
		?>	
	</div>
</div>

<?php
$_SESSION['_form_highlight'][$GLOBALS['form_id']] = array();

if(isset($_REQUEST['print'])){
	$content = ob_get_clean();
	?>
	<html>
	<head>
		<title>Print</title>
		<link rel="stylesheet" href="css/styles.css" type="text/css" />
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.1.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.1.custom.min.js"></script>

		<style type="text/css">
		body{
		background-color:#FFFFFF !important;
		}
		.data_field_view{
		background-color:#FFFFFF !important;
		border:1px solid #EFEFEF;
		}
		th,td{
		font-size:12px;
		}
		.hidden{
		display:none;
		}
		</style>
	</head>
	<body>
		<input type="button" name="print" value="Click here to print" onclick="$(this).hide(); window.print(); ">
		<?php echo $content;?>
	</body>
	</html>
	<?php
	exit;
}
?>


<script type="text/javascript">
<?php if($show_incident_menu){ ?> 
// hacky tabs classes:
$('#incident_nav_wrap').addClass('ui-tabs ui-corner-all'); //ui-widget-content ui-widget 
$('#incident_nav').addClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');
$('#incident_nav li').addClass('ui-state-default ui-corner-top');
$('#incident_nav li.link_current').addClass('ui-tabs-selected ui-state-active');
<?php } ?> 
$('#incident_content').addClass('ui-tabs-panel ui-corner-bottom'); //ui-widget-content 

</script>