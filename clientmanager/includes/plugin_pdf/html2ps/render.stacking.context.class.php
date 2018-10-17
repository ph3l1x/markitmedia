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

class RenderStackingContext {
  var $_stacking_levels;

  function RenderStackingContext() {
    $this->set_stacking_levels(array());

    $level =& new StackingLevel('in-flow-non-inline');
    $this->add_stacking_level($level);

    $level =& new StackingLevel('in-flow-floats');
    $this->add_stacking_level($level);

    $level =& new StackingLevel('in-flow-inline');
    $this->add_stacking_level($level);
  }

  function get_stacking_levels() {
    return $this->_stacking_levels;
  }

  function set_stacking_levels($levels) {
    $this->_stacking_levels = $levels;
  }
}

?>