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