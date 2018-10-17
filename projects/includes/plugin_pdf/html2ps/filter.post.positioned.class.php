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