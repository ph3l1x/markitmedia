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