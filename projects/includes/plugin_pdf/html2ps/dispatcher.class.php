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