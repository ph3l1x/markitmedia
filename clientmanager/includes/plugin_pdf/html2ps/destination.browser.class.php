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
class DestinationBrowser extends DestinationHTTP {
  function headers($content_type) {
    return array(
                 "Content-Disposition: inline; filename=".$this->filename_escape($this->get_filename()).".".$content_type->default_extension,
                 "Content-Transfer-Encoding: binary",
                 "Cache-Control: private"
                 );
  }
}
?>