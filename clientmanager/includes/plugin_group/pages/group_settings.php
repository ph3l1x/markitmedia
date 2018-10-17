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

if(!module_config::can_i('view','Settings')){
    redirect_browser(_BASE_HREF);
}

if(isset($_REQUEST['group_id'])){
    include('group_edit.php');
}else{

    $search = isset($_REQUEST['search']) ? $_REQUEST['search'] : array();
    $groups = $module->get_groups($search);
    ?>


    <h2>
        <!--<span class="button">
            <?php /*echo create_link("Add New","add",module_group::link_open('new')); */?>
        </span>-->
        <?php echo _l('Groups'); ?>
    </h2>


    <form action="" method="post">

    <table width="100%" border="0" cellspacing="0" cellpadding="2" class="tableclass tableclass_rows">
        <thead>
        <tr class="title">
            <th><?php echo _l('Group Name'); ?></th>
            <th><?php echo _l('Available to'); ?></th>
            <th><?php echo _l('Group Members'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $c=0;
        foreach($groups as $group){ ?>
            <tr class="<?php echo ($c++%2)?"odd":"even"; ?>">
                <td class="row_action">
                    <?php echo module_group::link_open($group['group_id'],true);?>
                </td>
                <td>
                    <?php echo $group['owner_table'];?>
                </td>
                <td>
                    <?php echo $group['count']; ?>
                </td>
            </tr>
        <?php } ?>
      </tbody>
    </table>
    </form>
<?php } ?>