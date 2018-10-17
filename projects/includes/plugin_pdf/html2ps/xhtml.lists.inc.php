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
// $Header: /cvsroot/html2ps/xhtml.lists.inc.php,v 1.3 2005/04/27 16:27:46 Konstantin Exp $

function process_li(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(ul|ol|li|/li|/ul|/ol)", 
                       array("ul" => "process_ul",
                             "ol" => "process_ol"),
                       "/li");
};

function process_ol(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(li|/ol)",
                       array("li" => "process_li"),
                       "/ol");
};

function process_ul(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(li|/ul)",
                       array("li" => "process_li"),
                       "/ul");
};

function process_lists(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(ul|ol)",
                       array("ul" => "process_ul",
                             "ol" => "process_ol"),
                       "");
};

?>