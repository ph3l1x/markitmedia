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

class PostTreeFilterPostponed extends PreTreeFilter {
  var $_driver;

  function PostTreeFilterPostponed(&$driver) {
    $this->_driver  =& $driver;
  }

  function process(&$tree, $data, &$pipeline) {
    if (is_a($tree, 'GenericContainerBox')) {
      for ($i=0; $i<count($tree->content); $i++) {
        $position = $tree->content[$i]->get_css_property(CSS_POSITION);
        $float    = $tree->content[$i]->get_css_property(CSS_FLOAT);

        if ($position == POSITION_RELATIVE) {
          $this->_driver->postpone($tree->content[$i]);
        } elseif ($float != FLOAT_NONE) {
          $this->_driver->postpone($tree->content[$i]);
        };

        $this->process($tree->content[$i], $data, $pipeline);
      };
    };

    return true;
  }
}
?>