<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:15:41 
  * IP Address: 68.105.129.178
  */

if(class_exists('module_company',false) && module_company::can_i('view','Company') && module_company::is_enabled() && module_user::can_i('edit','User')){
    $heading = array(
        'type' => 'h3',
        'title' => 'Assigned Company',
    );
    if(module_company::can_i('edit','Company')){
        $help_text = addcslashes(_l("Here you can select which Company this Staff belongs to. This is handy if you are running multiple companies through this system and you would like to separate customers between different companies. Staff can be restricted to assigned companies from the User Role"),"'");
        $heading['button'] =  array(
          'url' => '#',
          'onclick' => "alert('$help_text'); return false;",
          'title' => 'help',
      );
    }
    ob_start();
    ?>
        <table class="tableclass tableclass_form tableclass_full">
        <tbody>
            <tr>
                <th class="width1">
                    <?php echo _l('Company'); ?>
                </th>
                <td>
                    <?php
                    $companys = module_company::get_companys();
                    foreach($companys as $company){ ?>
                        <?php if(module_company::can_i('edit','Company')){ ?>
                        <input type="hidden" name="available_user_company[<?php echo $company['company_id'];?>]" value="1">
                        <input type="checkbox" name="user_company[<?php echo $company['company_id'];?>]" id="customer_company_<?php echo $company['company_id'];?>" value="<?php echo $company['company_id'];?>" <?php echo isset($user['company_ids']) && isset($user['company_ids'][$company['company_id']]) ? ' checked="checked" ':'';?>>
                        <?php } ?>
                        <label for="customer_company_<?php echo $company['company_id'];?>"><?php echo htmlspecialchars($company['name']);?></label>
                    <?php } ?>
                </td>
            </tr>
        </tbody>
        </table>

    <?php

    $fieldset_data = array(
        'heading' => $heading,
        'elements_before' => ob_get_clean(),
    );

    echo module_form::generate_fieldset($fieldset_data);
    unset($fieldset_data);

}