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

class Dispatcher {
  var $_callbacks;

  function Dispatcher() {
    $this->_callbacks = array();
  }

  /**
   * @param String $type name of the event to dispatch
   */
  function add_event($type) {
    $this->_callbacks[$type] = array();
  }

  function add_observer($type, $callback) {
    $this->_check_event_type($type);
    $this->_callbacks[$type][] = $callback;
  }

  function fire($type, $params) {
    $this->_check_event_type($type);

    foreach ($this->_callbacks[$type] as $callback) {
      call_user_func($callback, $params);
    };
  }

  function _check_event_type($type) {
    if (!isset($this->_callbacks[$type])) {
      die(sprintf("Invalid event type: %s", $type));
    };
  }
}

?>