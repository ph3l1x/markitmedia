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
class DestinationDownload extends DestinationHTTP {
  function DestinationDownload($filename) {
    $this->DestinationHTTP($filename);
  }

  function headers($content_type) {
    return array(
                 "Content-Disposition: attachment; filename=".$this->filename_escape($this->get_filename()).".".$content_type->default_extension,
                 "Content-Transfer-Encoding: binary",
                 "Cache-Control: must-revalidate, post-check=0, pre-check=0",
                 "Pragma: public"
                 );
  }
}
?>