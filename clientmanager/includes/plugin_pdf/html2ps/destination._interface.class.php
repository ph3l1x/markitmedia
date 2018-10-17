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