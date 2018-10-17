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

class CSSCounterCollection {
  var $_counters;

  function CSSCounterCollection() {
    $this->_counters = array();
  }

  function add(&$counter) {
    $this->_counters[$counter->get_name()] =& $counter;
  }

  function &get($name) {
    if (!isset($this->_counters[$name])) {
      $null = null;
      return $null;
    };

    return $this->_counters[$name];
  }
}

?>