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
$module->page_title = _l('Preview');
//print_heading('Newsletter Editor');

$newsletter_id = isset($_REQUEST['newsletter_id']) ? (int)$_REQUEST['newsletter_id'] : false;
if(!$newsletter_id){
    redirect_browser(module_newsletter::link_list(false));
}
//$newsletter = module_newsletter::get_newsletter($newsletter_id);

if(isset($_REQUEST['show'])){
    // render the newsletter and display it on screen with nothing else.

    echo module_newsletter::render($newsletter_id,false,false,'preview');
    exit;
}

?>


<table width="100%" cellpadding="5">
    <tbody>
    <tr>
        <td width="50%" valign="top">

            <?php
            print_heading(array(
                  'type' => 'h2',
                  'title' => 'Preview Newsletter',
                  'button' => array(
                      'url' => module_newsletter::link_open($newsletter_id),
                      'title' => 'Return to Editor',
                  ),
              ));
            ?>

<iframe src="<?php echo module_newsletter::link_preview($newsletter_id);?>&show=true" frameborder="0" style="width:100%; height:700px; border:0;" background="transparent"></iframe>


    </td></tr></tbody></table>