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
if(!module_data::can_i('edit',_MODULE_DATA_NAME)){
	die("access denied");
}



$data_type_id = $_REQUEST['data_type_id'];
if($data_type_id && $data_type_id != 'new'){
	$data_type = $module->get_data_type($data_type_id);
}else{
	$data_type = array();
}



?>


<form action="" method="post">
<input type="hidden" name="_process" value="save_data_type" />
<input type="hidden" name="_redirect" value="<?php echo $module->link("",array("saved"=>true,"data_type_id"=>((int)$data_type_id)?$data_type_id:'')); ?>" />
<input type="hidden" name="data_type_id" value="<?php echo $data_type_id; ?>" />

    <?php
    $header_buttons = array();
    $fieldset_data = array(
        'heading' => array(
            'main' => true,
            'type' => 'h2',
            'title' => 'Data Settings',
            'button' => $header_buttons,
        ),
        'class' => 'tableclass tableclass_form tableclass_full',
        'elements' => array(
            'name' => array(
                'title' => _l('Name'),
                'field' => array(
                    'type' => 'text',
                    'name' => 'data_type_name',
                    'value' => (isset($data_type['data_type_name']))?htmlspecialchars($data_type['data_type_name']):'',
                ),
            ),
            'hook' => array(
                'title' => _l('Menu Location'),
                'field' => array(
                    'type' => 'select',
                    'name' => 'data_type_menu',
                    'options' => module_data::get_menu_locations(),
                    'blank' => false,
                    'value' => (isset($data_type['data_type_menu']))?htmlspecialchars($data_type['data_type_menu']):'',
                    'help' => 'This is where your custom data type will display within the system. Main will put it in the main menu. Customer will put it underneath a customer menu. None will hide this from the menu system all together',
                ),
            ),
            'icon' => array(
                'title' => _l('Icon'),
                'field' => array(
                    'type' => 'text',
                    'name' => 'data_type_icon',
                    'value' => (isset($data_type['data_type_icon']))?htmlspecialchars($data_type['data_type_icon']):'',
                    'help' => 'Type the icon name from http://fontawesome.io/icons/ (eg: bell). Compatible with the Metis theme.',
                ),
            ),
        ),
    );
    echo module_form::generate_fieldset($fieldset_data);
    unset($fieldset_data);
	$form_actions = array(
        'class' => 'action_bar action_bar_center action_bar_single',
        'elements' => array(
            array(
                'type' => 'save_button',
                'name' => 'butt_save',
                'value' => _l('Save Settings'),
            ),
            array(
                'type' => 'delete_button',
                'name' => 'butt_del',
                'value' => _l('Delete'),
                'onclick' => "return confirm('Really delete?');",
            ),
            array(
                'type' => 'button',
                'name' => 'cancel',
                'value' => _l('Cancel'),
                'class' => 'submit_button',
                'onclick' => "window.location.href='".$module->link()."';",
            ),
        ),
    );
    echo module_form::generate_form_actions($form_actions);
	?>


<p>&nbsp;</p>
<?php
if($data_type_id && $data_type_id != 'new'){
	$data_field_groups = $module->get_data_field_groups($data_type_id);


    ob_start();
	?>
	
	<table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_rows">
		<thead>
		<tr class="title">
	    	<th><?php echo _l('Data Fieldset'); ?></th>
	    	<th><?php echo _l('Fields'); ?></th>
	    </tr>
	    </thead>
	    <tbody>
	    <?php
        if(!count($data_field_groups)){
            ?>
            <tr>
                <td colspan="2" align="center">
                    <a href="<?php echo $module->link("",array('data_type_id'=>$data_type_id,'data_field_group_id'=>'new'));?>" class="uibutton">
                        <?php if(isset($button['type']) && $button['type'] == 'add'){ ?> <img src="<?php echo _BASE_HREF;?>images/add.png" width="10" height="10" alt="add" border="0" /> <?php } ?>
                        <span><?php echo _l('Create New Fieldset');?></span>
                    </a>
                </td>
            </tr>
            <?php
        }else{
	    $c=0;
		foreach($data_field_groups as $data){ 
			$data_field_group = $module->get_data_field_group($data['data_field_group_id']);
			?>
	        <tr class="<?php echo ($c++%2)?"odd":"even"; ?>">
	            <td class="row_action"><a href="<?php echo $module->link('',array("data_type_id"=>$data_type['data_type_id'],"data_field_group_id"=>$data_field_group['data_field_group_id'])); ?>"><?php echo htmlspecialchars($data_field_group['title']); ?></a></td>
	            <td>
                    <?php $data_fields = $module->get_data_fields($data['data_field_group_id']);
                    $data_field_names = array();
                    foreach($data_fields as $data_field){
                        $data_field_names[] = htmlspecialchars($data_field['title']);
                    }
                    echo implode(', ',$data_field_names);
                    ?>
	            </td>
	        </tr>
	    <?php }
        }
        ?>
	    </tbody>
	</table>
	<?php

    $header_buttons = array();
    $header_buttons[] = array(
        'url' => $module->link("",array('data_type_id'=>$data_type_id,'data_field_group_id'=>'new')),
        'title' => 'Create New',
        'type' => 'add',
    );

    $fieldset_data = array(
        'heading' => array(
            'type' => 'h2',
            'title' => 'Data Fieldsets',
            'button' => $header_buttons,
            'help' => 'Each Data Fieldset will contain a set of fields (eg: input or radio select boxes). Create a new fieldset to begin.',
        ),
        'class' => 'tableclass tableclass_form tableclass_full',
        'elements_before' => ob_get_clean(),
    );
    echo module_form::generate_fieldset($fieldset_data);
    unset($fieldset_data);
}