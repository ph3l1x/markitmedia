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
// $Header: /cvsroot/html2ps/output._generic.pdf.class.php,v 1.1 2005/12/13 18:24:45 Konstantin Exp $

class OutputDriverGenericPDF extends OutputDriverGeneric {
  var $pdf_version;

  function OutputDriverGenericPDF() {
    $this->OutputDriverGeneric();
    $this->set_pdf_version("1.3");
  }

  function content_type() { return ContentType::pdf(); }

  function get_pdf_version() { 
    return $this->pdf_version; 
  }

  function reset($media) {
    OutputDriverGeneric::reset($media);
  }

  function set_pdf_version($version) {
    $this->pdf_version = $version;
  }
}
?>