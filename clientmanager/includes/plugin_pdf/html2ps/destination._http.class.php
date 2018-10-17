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
class DestinationHTTP extends Destination {  
  function DestinationHTTP($filename) {
    $this->Destination($filename);
  }

  function headers($content_type) {
    die("Unoverridden 'header' method called in ".get_class($this));
  }

  function process($tmp_filename, $content_type) {
    header("Content-Type: ".$content_type->mime_type);
    
    $headers = $this->headers($content_type);
    foreach ($headers as $header) {
      header($header);
    };

    // NOTE: readfile does not work well with some Windows machines
    // echo(file_get_contents($tmp_filename));
    readfile($tmp_filename);
  }
}
?>