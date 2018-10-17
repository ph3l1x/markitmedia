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
class FetchedDataFile extends FetchedDataHTML {
  var $content;
  var $path;

  function FetchedDataFile($content, $path) {
    $this->content = $content;
    $this->path    = $path;
  }

  function detect_encoding() {
    // First, try to get encoding from META http-equiv tag
    //
    $encoding = $this->_detect_encoding_using_meta($this->content);

    // At last, fall back to default encoding
    //
    if (is_null($encoding)) { $encoding = "iso-8859-1";  }

    return $encoding;
  }

  function get_additional_data($key) {
    return null;
  }

  function get_content() {
    return $this->content;
  }

  function set_content($data) {
    $this->content = $data;
  }
}
?>