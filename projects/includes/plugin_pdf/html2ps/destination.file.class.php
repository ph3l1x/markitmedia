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
class DestinationFile extends Destination {
  var $_link_text;

  function DestinationFile($filename, $link_text = null) {
    $this->Destination($filename);

    $this->_link_text = $link_text;
  }

  function process($tmp_filename, $content_type) {
    $dest_filename = OUTPUT_FILE_DIRECTORY.$this->filename_escape($this->get_filename()).".".$content_type->default_extension;

    copy($tmp_filename, $dest_filename);

    $text = $this->_link_text;
    $text = preg_replace('/%link%/', 'file://'.$dest_filename, $text);
    $text = preg_replace('/%name%/', $this->get_filename(), $text);
    print $text;
  }
}
?>