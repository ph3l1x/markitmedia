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