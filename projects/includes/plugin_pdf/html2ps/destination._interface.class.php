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
class Destination {
  var $filename;

  function Destination($filename) {
    $this->set_filename($filename);
  }

  function filename_escape($filename) { return preg_replace("/[^a-z0-9-]/i","_",$filename); }

  function get_filename() { return empty($this->filename) ? OUTPUT_DEFAULT_NAME : $this->filename; }

  function process($filename, $content_type) {
    die("Oops. Inoverridden 'process' method called in ".get_class($this));
  }

  function set_filename($filename) { $this->filename = $filename; }
}
?>