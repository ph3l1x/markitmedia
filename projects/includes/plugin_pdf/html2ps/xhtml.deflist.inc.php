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
// $Header: /cvsroot/html2ps/xhtml.deflist.inc.php,v 1.3 2005/04/27 16:27:46 Konstantin Exp $

function process_dd(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(dt|dd|dl|/dl|/dd)", array("dl" => "process_dl"), "/dd");
}

function process_dt(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(dt|dd|dl|/dl|/dd)", array("dl" => "process_dl"), "/dt");  
}

function process_dl(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(dt|dd|/dl)", 
                       array("dt" => "process_dt",
                             "dd" => "process_dd"), 
                       "/dl");  
};

function process_deflists(&$sample_html, $offset) {
  return autoclose_tag($sample_html, $offset, "(dl)", 
                       array("dl" => "process_dl"),
                       "");
};

?>