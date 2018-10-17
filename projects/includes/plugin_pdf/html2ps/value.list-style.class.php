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
// $Header: /cvsroot/html2ps/value.list-style.class.php,v 1.3 2007/01/09 20:10:09 Konstantin Exp $

require_once(HTML2PS_DIR . 'value.generic.php');

class ListStyleValue extends CSSValue {
  var $image;
  var $position;
  var $type;

  function doInherit(&$state) {
    if ($this->image === CSS_PROPERTY_INHERIT) {
      $value = $state->getInheritedProperty(CSS_LIST_STYLE_IMAGE);
      $this->image = $value->copy();
    };

    if ($this->position === CSS_PROPERTY_INHERIT) {
      $value = $state->getInheritedProperty(CSS_LIST_STYLE_POSITION);
      $this->position = $value;
    };

    if ($this->type === CSS_PROPERTY_INHERIT) {
      $value = $state->getInheritedProperty(CSS_LIST_STYLE_TYPE);
      $this->type = $value;
    };
  }

  function is_default() {
    return 
      $this->image->is_default() &&
      $this->position == CSSListStylePosition::default_value() &&
      $this->type     == CSSListStyleType::default_value();
  }

  function &copy() {
    $object =& new ListStyleValue;

    if ($this->image === CSS_PROPERTY_INHERIT) {
      $object->image = CSS_PROPERTY_INHERIT;
    } else {
      $object->image = $this->image->copy();
    };

    $object->position = $this->position;
    $object->type     = $this->type;

    return $object;
  }
}

?>