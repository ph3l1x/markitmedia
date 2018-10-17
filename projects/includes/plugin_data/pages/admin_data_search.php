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

$data_types = $module->get_data_types();

$data_type_id = (isset($_REQUEST['data_type_id'])) ? (int)$_REQUEST['data_type_id'] : false;
if($data_type_id){
	
	if(isset($_REQUEST['search_go']) && $_REQUEST['search_go']){
		
		// run a search on the provided fields over the current data records, displaying the results
		// (similar to admin_data_list)
	
		$search = array();
		$search['data_type_id'] = $data_type_id;
		// we have to limit the data types to only those created by current user if they are not administration
	    $datas = $module->get_datas($search);

        $search_fields = isset($_REQUEST['search_do']) ? $_REQUEST['search_do'] : array();
	    
	    // do the search in php.
	    foreach($datas as $data_id=>$data){
	    	// check status
	    	if(isset($_REQUEST['status']) && $_REQUEST['status']){
	    		if($data['status'] != $_REQUEST['status']){
	    			unset($datas[$data_id]);
	    			continue;
	    		}
	    	}
	    	// check create user id
	    	if(isset($_REQUEST['create_user_id']) && $_REQUEST['create_user_id']){
	    		if($data['create_user_id'] != $_REQUEST['create_user_id']){
	    			unset($datas[$data_id]);
	    			continue;
	    		}
	    	}
	    	// check searchable fields.
	    	if(isset($_REQUEST['data_field']) && is_array($_REQUEST['data_field'])){
	    		$data_items = $module->get_data_items($data['data_record_id']);
	    		foreach($_REQUEST['data_field'] as $data_field_id => $data_field_value){
                    if(isset($search_fields[$data_field_id])){
                        $settings = @unserialize($data_items[$data_field_id]['data_field_settings']);
                        if(is_array($data_field_value)){
                            $array_search = true;
                            $array_match = false;
                            foreach($data_field_value as $data_field_value_id => $data_field_value_value){
                                $data_field_value_value = trim($data_field_value_value);
                                // check if there's an "other" value
                                if(strtolower($data_field_value_value) == 'other' && isset($_REQUEST['other_data_field'][$data_field_id])){
                                    $data_field_value_value = trim($_REQUEST['other_data_field'][$data_field_id]);
                                }

                                if($data_field_value_value){
                                    // search this field!
                                    $foo = @unserialize($data_items[$data_field_id]['data_text']);
                                    if($foo){
                                        $data_items[$data_field_id]['data_text'] = $foo;
                                    }
                                    if(isset($data_items[$data_field_id]) && is_array($data_items[$data_field_id]['data_text']) && isset($data_items[$data_field_id]['data_text'][$data_field_value_id])){
                                        $array_match = true;
                                    }
                                }
                            }
                            if(!$array_match){
                                unset($datas[$data_id]);
                                continue;
                            }
                        }else{
                            $data_field_value = trim($data_field_value);
                            // check if there's an "other" value
                            if(strtolower($data_field_value) == 'other' && isset($_REQUEST['other_data_field'][$data_field_id])){
                                $data_field_value = trim($_REQUEST['other_data_field'][$data_field_id]);
                            }
                            if($data_field_value){
                                // search this field!
                                if(isset($data_items[$data_field_id])) {
                                    $foo = @unserialize( $data_items[ $data_field_id ]['data_text'] );
                                    if(is_array($foo)){
                                        if(!in_array($data_field_value, $foo)){
                                            unset( $datas[ $data_id ] );
                                            continue;
                                        }
                                    }else {

                                        if ( $settings['field_type'] && $settings['field_type'] == 'text' ) {
                                            if ( strpos( strtolower( trim( $data_items[ $data_field_id ]['data_text'] ) ), strtolower( $data_field_value ) ) === false ) {
                                                unset( $datas[ $data_id ] );
                                                continue;
                                            }
                                        } else if ( strtolower( trim( $data_items[ $data_field_id ]['data_text'] ) ) != strtolower( $data_field_value ) ) {
                                            unset( $datas[ $data_id ] );
                                            continue;
                                        }
                                    }
                                }else{
                                    unset( $datas[ $data_id ] );
                                    continue;
                                }
                            }
                        }
                    }
	    		}
	    	}
	    }

        $header_buttons[] = array(
                'url' => $module->link("",array(
                    'search_form'=>1,
                    'data_type_id'=>$data_type_id,
                )),
                'title' => 'Return to Search',
        );

        print_heading(array(
            'type' => 'h2',
            'title' => 'Search Results',
            'main' => true,
            'button' => $header_buttons,
        ));


        include('admin_data_list_output.php');



	}else{
		// display the search options for this data type
		$data_type = $data_types[$data_type_id];

        print_heading(array(
            'type' => 'h2',
            'title' => htmlspecialchars(_l('Search %s',$data_type['data_type_name'])),
            'main' => true,
        ));
		?>

		<form action="" method="POST">
		<input type="hidden" name="search_go" value="true">

            <script type="text/javascript">
                $(function(){
                    $('.search_do').each(function(){
                        $(this).change(function(){
                            if(this.checked){
                                $('#search_field_'+$(this).attr('rel')).show();
                            }else{
                                $('#search_field_'+$(this).attr('rel')).hide();
                            }
                        }).mouseup(function(){
                            if(this.checked){
                                $('#search_field_'+$(this).attr('rel')).show();
                            }else{
                                $('#search_field_'+$(this).attr('rel')).hide();
                            }
                        });
                    });
                });
            </script>


		<?php
		// which fields are searchable:
		$data_field_groups = $module->get_data_field_groups($data_type_id);
		foreach($data_field_groups as $data_field_group){
			$data_field_group_id = $data_field_group['data_field_group_id'];
			$data_field_group = $module->get_data_field_group($data_field_group_id); // needed?
			$data_fields = $module->get_data_fields($data_field_group_id);
			foreach($data_fields as $data_field_id => $data_field){
				if(!$data_field['searchable']){
					unset($data_fields[$data_field_id]);
				}
            }
            if($data_fields){

                ob_start();
                ?>
                <table class="tableclass tableclass_form">
                <?php
                foreach($data_fields as $data_field_id => $data_field){
                    $data_field['multiple'] = false;
                    ?>

                    <tr>
                        <th class="width2"><?php echo $data_field['title'];?></th>
                        <td>
                            <div style="float:left; padding:0 10px 0 0">
                            <input type="checkbox" name="search_do[<?php echo $data_field['data_field_id'];?>]" value="1"
                                   rel="<?php echo $data_field['data_field_id'];?>" class="search_do">
                                </div>
                            <div style="float:left">
                            <div id="search_field_<?php echo $data_field['data_field_id'];?>" style="display:none;">
                            <?php echo $module->get_form_element($data_field); ?>
                            </div>
                            </div>
                        </td>
                    </tr>

                    <?php
                }
                ?>
                </table>
                <?php
                $fieldset_data = array(
                    'heading' => array(
                        'title' => htmlspecialchars($data_field_group['title']),
                        'type' => 'h3',
                    ),
                    'elements_before' => ob_get_clean(),
                );
                echo module_form::generate_fieldset($fieldset_data);
                unset($fieldset_data);

            }
		}
		?>
		
		<input type="submit" name="search" value="Search" class="submit_button save_button">
		<input type="button" name="cancel" value="Cancel" class="submit_button" onclick="window.location.href='<?php echo $module->link('',array('data_type_id'=>$data_type_id)); ?>';">
		</form>
		
		<?php
	
	}
}else{
	// let user select a data type
	
	?>
	<h2><?php echo _l('Select Type to Search'); ?></h2>
	
	<?php foreach($data_types as $data_type){
		?>
		
		<a class="uibutton" href="<?php echo $module->link('admin_data_search',array('data_type_id'=>$data_type['data_type_id']));?>"><?php echo $data_type['data_type_name'];?></a>
		
		<?php
	}
	
}
