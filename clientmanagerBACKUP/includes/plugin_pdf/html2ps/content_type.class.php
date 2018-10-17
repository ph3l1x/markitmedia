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
class ContentType {
  var $default_extension;
  var $mime_type;

  function ContentType($extension, $mime) {
    $this->default_extension = $extension;
    $this->mime_type = $mime;
  }

  function png() {
    return new ContentType('png', 'image/png');
  }

  function gz() {
    return new ContentType('gz', 'application/gzip');
  }

  function pdf() {
    return new ContentType('pdf', 'application/pdf');
  }

  function ps() {
    return new ContentType('ps', 'application/postscript');
  }
}
?>