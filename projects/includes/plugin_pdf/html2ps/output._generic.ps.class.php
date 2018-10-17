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
// $Header: /cvsroot/html2ps/output._generic.ps.class.php,v 1.2 2007/05/07 13:12:07 Konstantin Exp $

class OutputDriverGenericPS extends OutputDriverGeneric {
  var $language_level;
  var $image_encoder;
 
  function content_type() { 
    return ContentType::ps(); 
  }

  function &get_image_encoder() { 
    return $this->image_encoder; 
  }

  function get_language_level() { 
    return $this->language_level; 
  }

  function OutputDriverGenericPS($image_encoder) {
    $this->OutputDriverGeneric();
        
    $this->set_language_level(2);
    $this->set_image_encoder($image_encoder);
  }

  function reset(&$media) {
    OutputDriverGeneric::reset($media);
  }

  function set_image_encoder(&$encoder) {
    $this->image_encoder = $encoder;
  }

  function set_language_level($version) {
    $this->language_level = $version;
  }
}
?>