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
class FetchedDataHTML extends FetchedData {
  function detect_encoding() {
    die("Unoverridden 'detect_encoding' called in ".get_class($this));
  }

  function _detect_encoding_using_meta() {
    if (preg_match("#<\s*meta[^>]+content=(['\"])?text/html;\s*charset=([\w\d-]+)#is",$this->get_content(),$matches)) {
      return strtolower($matches[2]);
    } else {
      return null;
    };
  }
}
?>