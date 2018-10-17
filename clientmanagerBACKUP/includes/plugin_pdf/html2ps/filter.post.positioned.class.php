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

class PostTreeFilterPositioned extends PreTreeFilter {
  var $_context;

  function PostTreeFilterPositioned(&$context) {
    $this->_context =& $context;
  }

  function process(&$tree, $data, &$pipeline) {
    if (is_a($tree, 'GenericContainerBox')) {
      for ($i=0; $i<count($tree->content); $i++) {
        $position = $tree->content[$i]->get_css_property(CSS_POSITION);
        $float    = $tree->content[$i]->get_css_property(CSS_FLOAT);

        if ($position == POSITION_ABSOLUTE) {
          $this->_context->add_absolute_positioned($tree->content[$i]);
        } elseif ($position == POSITION_FIXED) {
          $this->_context->add_fixed_positioned($tree->content[$i]);
        };

        $this->process($tree->content[$i], $data, $pipeline);
      };
    };

    return true;
  }
}
?>