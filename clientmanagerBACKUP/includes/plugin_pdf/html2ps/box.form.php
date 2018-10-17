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