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