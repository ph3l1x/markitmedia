<div class="blob">
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

    $step = (isset($_REQUEST['step'])) ? (int)$_REQUEST['step'] : 0;

    //print_heading('Setup Wizard (step '.$step.' of 4)');?>

    
    <p>
        <?php echo _l('Hello, Welcome to the setup wizard. You are currently on step %s of 5.',$step); ?>
    </p>

    <?php
    include('setup'.$step.'.php');
    ?>
      
</div>


