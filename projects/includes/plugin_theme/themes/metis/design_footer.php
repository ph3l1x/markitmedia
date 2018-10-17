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
switch($display_mode){
    case 'iframe':
        ?>
         </div> <!-- end .inner -->
         </div> <!-- end .outer -->
         </div> <!-- end .content -->
        </body>
        </html>
        <?php
        module_debug::push_to_parent();
        break;
    case 'ajax':

        break;
    case 'normal':
    default:
        ?>

         </div> <!-- end .inner -->
         </div> <!-- end .outer -->
         </div> <!-- end .content -->

        </div>
        <!-- /#wrap -->


        <div id="footer">
            <p>&copy; <?php echo module_config::s('admin_system_name','Ultimate Client Manager'); ?>
              - <?php echo date("Y"); ?>
              - Version: <?php echo module_config::current_version(); ?>
              - Time: <?php echo round(microtime(true)-$start_time,5);?>
            </p>
        </div>

        </body>
        </html>
        <?php
        break;
}