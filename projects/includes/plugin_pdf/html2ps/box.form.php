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

class FormBox extends BlockBox {
  /**
   * @var String form name; it will be used as a prefix for field names when submitting forms
   * @access private
   */
  var $_name;

  function show(&$driver) {
    global $g_config;
    if ($g_config['renderforms']) {
      $driver->new_form($this->_name);
    };
    return parent::show($driver);
  }

  function &create(&$root, &$pipeline) {
    if ($root->has_attribute('name')) {
      $name = $root->get_attribute('name');
    } elseif ($root->has_attribute('id')) {
      $name = $root->get_attribute('id');
    } else {
      $name = "";
    };

    $box = new FormBox($name);
    $box->readCSS($pipeline->get_current_css_state());
    $box->create_content($root, $pipeline);
    return $box;
  }

  function FormBox($name) {
    $this->BlockBox();

    $this->_name = $name;
  }
}

?>