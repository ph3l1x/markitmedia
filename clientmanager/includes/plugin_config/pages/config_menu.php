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
print_heading('Menu Order (beta!)');

if(isset($_REQUEST['save_config'])&&is_array($_REQUEST['save_config'])){
    foreach($_REQUEST['save_config'] as $key=>$val){
        module_config::save_config($key,$val);
    }
    set_message('Menu order saved');
}
?>

<form action="" method="post">
    <table class="tableclass tableclass_rows">
        <thead>
        <tr>
            <th class="width2">
                <?php _e('Menu Item');?>
            </th>
            <th>
                <?php _e('Position');?>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        $c=0;
        foreach(get_multiple('config') as $config){
            if(preg_match('#_menu_order_(.*)#',$config['key'],$matches)){
                ?>
                <tr class="<?php echo $c++%2 ? 'odd' : 'even';?>">
                    <td>
                        <?php echo $matches[1];?>
                    </td>
                    <td>
                        <input type="text" name="save_config[<?php echo $matches[0];?>]" value="<?php echo htmlspecialchars($config['val']);?>" size="6">
                    </td>
                </tr>
                <?php
            }else{
                continue;
            }
        }
        ?>
        </tbody>
    </table>
    <input type="submit" name="save" value="<?php _e('Update menu order');?>">
</form>