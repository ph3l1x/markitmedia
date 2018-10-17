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

class FeatureFactory {
  var $_features;

  function FeatureFactory() {
    $this->_features = array();
  }

  function &get($name) {
    $instance =& FeatureFactory::get_instance();
    return $instance->_get($name);
  }

  function &_get($name) {
    if (!isset($this->__features[$name])) {
      $this->_features[$name] =& $this->_load($name);
    };
    return $this->_features[$name];
  }

  function &_load($name) {
    $normalized_name = strtolower(preg_replace('/[^\w\d\.]/i', '_', $name));
    $file_name = HTML2PS_DIR.'features/'.$normalized_name.'.php';
    $class_name = 'Feature'.join('',array_map('ucfirst',explode('.',$normalized_name)));

    if (!file_exists($file_name)) {
      $null = null;
      return $null;
    };

    require_once($file_name);
    $feature_object =& new $class_name;
    return $feature_object;
  }

  function &get_instance() {
    static $instance = null;
    if (is_null($instance)) {
      $instance =& new FeatureFactory();
    };

    return $instance;
  }
}

?>