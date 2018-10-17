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