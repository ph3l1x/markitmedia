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

class ValueContentItem {
  function ValueContentItem() {
  }

  function parse($string) {
    $subclasses = array('ValueContentItemString',
                        'ValueContentItemUri',
                        'ValueContentItemCounter',
                        'ValueContentItemAttr',
                        'ValueContentItemOpenQuote',
                        'ValueContentItemCloseQuote',
                        'ValueContentItemNoOpenQuote',
                        'ValueContentItemNoCloseQuote');

    foreach ($subclasses as $subclass) {
      $result = call_user_func(array($subclass, 'parse'), $string);
      $rest = $result['rest'];
      $item =& $result['item'];
      
      if (!is_null($item)) {
        return array('item' => &$item, 
                     'rest' => $rest);
      };
    };

    $null = null;
    return array('item' => &$null, 
                 'rest' => $string);
  }

  function render(&$counters) {
    // abstract
  }
}

class ValueContentItemString extends ValueContentItem {
  var $_value;

  function ValueContentItemString() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemString();
    $copy->set_value($this->get_value());
    return $copy;
  }

  function get_value() {
    return $this->_value;
  }

  function parse($string) {
    list($value, $rest) = CSS::parse_string($string);
    if (!is_null($value)) {
      $item =& new ValueContentItemString();
      $item->set_value(substr($value, 1, strlen($value)-2));
      return array('item' => &$item, 
                   'rest' => $rest);
    };

    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return css_process_escapes($this->_value);
  }

  function set_value($value) {
    $this->_value = $value;
  }
}

class ValueContentItemUri extends ValueContentItem {
  var $_value;

  function ValueContentItemUri() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemUri();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

class ValueContentItemCounter extends ValueContentItem {
  var $_name;

  function ValueContentItemCounter() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemCounter();
    $copy->set_name($this->get_name());
    return $copy;
  }

  function get_name() {
    return $this->_name;
  }

  function parse($string) {
    if (preg_match('/^\s*counter\(('.CSS_IDENT_REGEXP.')\)\s*(.*)$/', $string, $matches)) {
      $value = $matches[1];
      $rest = $matches[2];

      $item =& new ValueContentItemCounter();
      $item->set_name($value);
      return array('item' => &$item, 
                   'rest' => $rest);
    };

    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    $counter =& $counters->get($this->get_name());
    if (is_null($counter)) {
      return '';
    };

    return $counter->get();
  }

  function set_name($value) {
    $this->_name = $value;
  }
}

class ValueContentItemAttr extends ValueContentItem {
  function ValueContentItemAttr() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemAttr();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

class ValueContentItemOpenQuote extends ValueContentItem {
  function ValueContentItemOpenQuote() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemOpenQuote();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

class ValueContentItemCloseQuote extends ValueContentItem {
  function ValueContentItemCloseQuote() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemCloseQuote();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

class ValueContentItemNoOpenQuote extends ValueContentItem {
  function ValueContentItemNoOpenQuote() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemNoOpenQuote();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

class ValueContentItemNoCloseQuote extends ValueContentItem {
  function ValueContentItemNoCloseQuote() {
    $this->ValueContentItem();
  }

  function &copy() {
    $copy =& new ValueContentItemNoCloseQuote();
    return $copy;
  }

  function parse($string) {
    $null = null;
    return array('item' => &$null, 'rest' => $string);
  }

  function render(&$counters) {
    return '';
  }
}

?>