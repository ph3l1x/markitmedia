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