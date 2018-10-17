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