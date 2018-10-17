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

define('BACKGROUND_ATTACHMENT_SCROLL', 1);
define('BACKGROUND_ATTACHMENT_FIXED', 2);

class CSSBackgroundAttachment extends CSSSubFieldProperty {
  function get_property_code() {
    return CSS_BACKGROUND_ATTACHMENT;
  }

  function get_property_name() {
    return 'background-attachment';
  }

  function default_value() {
    return BACKGROUND_ATTACHMENT_SCROLL;
  }

  function &parse($value_string) {
    if ($value_string === 'inherit') {
      return CSS_PROPERTY_INHERIT;
    };

    if (preg_match('/\bscroll\b/', $value_string)) {
      $value = BACKGROUND_ATTACHMENT_SCROLL;
    } elseif (preg_match('/\bfixed\b/', $value_string)) {
      $value = BACKGROUND_ATTACHMENT_FIXED;
    } else {
      $value = BACKGROUND_ATTACHMENT_SCROLL;
    };

    return $value;
  }
}
?>