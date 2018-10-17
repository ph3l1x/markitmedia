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

class FetcherLocalFile extends Fetcher {
  var $_content;
  
  function FetcherLocalFile($file) {
    $this->_content = file_get_contents($file);
  }

  function get_data($dummy1) {
    return new FetchedDataURL($this->_content, array(), "");
  }
  
  function get_base_url() {
    return '';
  }

  function error_message() {
    return '';
  }
}
?>