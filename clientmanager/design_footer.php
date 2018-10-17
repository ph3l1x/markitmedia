<?php 
/** 
  * Copyright: dtbaker 2012
  * Licence: Please check CodeCanyon.net for licence details. 
  * More licence clarification available here:  http://codecanyon.net/wiki/support/legal-terms/licensing-terms/ 
  * Deploy: 4875 748b5706505849baa3c828b967993faf
  * Envato: 95d3e251-990b-4e39-8210-3c31e1148599
  * Package Date: 2015-04-27 08:15:49 
  * IP Address: 68.105.129.178
  */
switch($display_mode){
    case 'iframe':
        ?>
         </div>
        </body>
        </html>
        <?php
        module_debug::push_to_parent();
        break;
    case 'ajax':

        break;
    case 'mobile':
        if(class_exists('module_mobile',false)){
            module_mobile::render_stop($page_title,$page);
        }
        break;
    case 'normal':
    default:
        ?>

        </div>
          </div>
          <div id="footer">
              &copy; <?php echo module_config::s('admin_system_name','Ultimate Client Manager'); ?>
              - <?php echo date("Y"); ?>
              - Version: <?php echo module_config::current_version(); ?>
              - Time: <?php echo round(microtime(true)-$start_time,5);?>
              <?php if(class_exists('module_mobile',false) && module_config::c('mobile_link_in_footer',1)){ ?>
            - <a href="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); echo strpos($_SERVER['REQUEST_URI'],'?')===false ? '?' : '&'; ?>display_mode=mobile"><?php _e('Switch to Mobile Site');?></a>
            <?php } ?>
          </div>
        </div>
        </body>
        </html>
        <?php
        break;
}