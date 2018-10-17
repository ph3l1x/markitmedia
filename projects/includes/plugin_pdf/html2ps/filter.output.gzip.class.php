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

class OutputFilterGZip extends OutputFilter {
  function content_type() {
    return null;
    //    return ContentType::gz();
  }

  function process($tmp_filename) {
    $output_file = $tmp_filename.'.gz';

    $file = gzopen($output_file, "wb");
    gzwrite($file, file_get_contents($tmp_filename));
    gzclose($file);

    unlink($tmp_filename);
    return $output_file;
  }
}
?>