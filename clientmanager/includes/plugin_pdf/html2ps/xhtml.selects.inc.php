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
// $Header: /cvsroot/html2ps/xhtml.selects.inc.php,v 1.3 2005/04/27 16:27:46 Konstantin Exp $

function process_option(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(option|/select|/option)", 
                       array(), 
                       "/option");  
};

function process_select(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(option|/select)", 
                       array("option" => "process_option"), 
                       "/select");  
};

function process_selects(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(select)", 
                       array("select" => "process_select"), 
                       "");  
};

?>