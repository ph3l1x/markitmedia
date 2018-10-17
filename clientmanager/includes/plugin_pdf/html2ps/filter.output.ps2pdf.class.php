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

function safe_exec($cmd, &$output) {
  exec($cmd, $output, $result);

  if ($result) {
    $message = "";

    if (count($output) > 0) {
      $message .= "Error executing '{$cmd}'<br/>\n";
      error_log("Error executing '{$cmd}'.");
      $message .= "Command produced the following output:<br/>\n";
      error_log("Command produced the following output:");

      foreach ($output as $line) {
        $message .= "{$line}<br/>\n";
        error_log($line);
      };
    } else {
      $_cmd = $cmd;
      include(HTML2PS_DIR . 'templates/error_exec.tpl');
      error_log("Error executing '{$cmd}'. Command produced no output.");
      die("HTML2PS Error");
    };
    die($message);
  };
}

class OutputFilterPS2PDF extends OutputFilter {
  var $pdf_version;

  function content_type() {
    return ContentType::pdf();
  }

  function _mk_cmd($filename) {
    return GS_PATH." -dNOPAUSE -dBATCH -dEmbedAllFonts=true -dCompatibilityLevel=".$this->pdf_version." -sDEVICE=pdfwrite -sOutputFile=".$filename.".pdf ".$filename;
  }

  function OutputFilterPS2PDF($pdf_version) {
    $this->pdf_version = $pdf_version;
  }

  function process($tmp_filename) {
    $pdf_file = $tmp_filename.'.pdf';
    safe_exec($this->_mk_cmd($tmp_filename), $output);
    unlink($tmp_filename);
    return $pdf_file;
  }
}
?>