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

require_once(HTML2PS_DIR . 'value.content.item.php');

class ValueContent {
  var $_items;

  function ValueContent() {
    $this->set_items(array());
  }

  function add_item(&$item) {
    $this->_items[] =& $item;
  }

  function &copy() {
    $copy =& new ValueContent();

    foreach ($this->_items as $item) {
      $copy->add_item($item->copy());
    };

    return $copy;
  }

  function doInherit(&$state) {
    
  }

  function &parse($string) {
    $value =& new ValueContent();

    while ($string !== '') {
      $result = ValueContentItem::parse($string);

      $item =& $result['item'];
      $rest = $result['rest'];

      $string = $rest;

      if (is_null($item)) {
        break;
      };

      $value->add_item($item);
    };

    return $value;
  }

  function render(&$counters) {
    $content = array();
    foreach ($this->_items as $item) {
      $content[] = $item->render($counters);
    };
    return join('', $content);
  }

  function set_items($value) {
    $this->_items = $value;
  }
}

?>