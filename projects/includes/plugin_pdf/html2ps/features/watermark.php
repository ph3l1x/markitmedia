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

class FeatureWatermark {
  var $_text;

  function FeatureWatermark() {
    $this->set_text('');
  }

  function get_text() {
    return $this->_text;
  }

  function handle_after_page($params) {
    $pipeline =& $params['pipeline'];
    $document =& $params['document'];
    $pageno =& $params['pageno'];

    $pipeline->output_driver->_show_watermark($this->get_text());
  }

  function install(&$pipeline, $params) {
    $dispatcher =& $pipeline->get_dispatcher();
    $dispatcher->add_observer('after-page', array(&$this, 'handle_after_page'));

    $this->set_text($params['text']);
  }

  function set_text($text) {
    $this->_text = $text;
  }
}

?>