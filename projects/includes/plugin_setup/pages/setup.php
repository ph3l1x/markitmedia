<div class="blob">
	<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4146 85cb4dc3ce4ad91caa2c8b477a6dd3f1
  * Envato: 977933f5-c2bd-415a-9568-b35beb3a6bf1
  * Package Date: 2014-01-03 10:30:21 
  * IP Address: 119.95.119.2
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


