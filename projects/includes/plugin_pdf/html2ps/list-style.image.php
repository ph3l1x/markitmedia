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

class ListStyleImage {
  var $_url;
  var $_image;

  function ListStyleImage($url, $image) {
    $this->_url = $url;
    $this->_image = $image;
  }

  function &copy() {
    $value =& new ListStyleImage($this->_url, $this->_image);
    return $value;
  }

  function is_default() { 
    return is_null($this->_url); 
  }
}

?>