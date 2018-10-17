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

require_once(HTML2PS_DIR . 'ps.image.encoder.stream.inc.php');

class PSL2ImageEncoderStream extends PSImageEncoderStream {
  function by_lines($image, &$size_x, &$size_y) {
    $lines = array();

    $size_x = imagesx($image->get_handle());
    $size_y = imagesy($image->get_handle());

    $dest_img    = imagecreatetruecolor($size_x, $size_y);
    imagecopymerge($dest_img, $image->get_handle(), 0, 0, 0, 0, $size_x, $size_y, 100);

    // initialize line length counter
    $ctr = 0;
    
    for ($y = 0; $y < $size_y; $y++) {
      $line = "";

      for ($x = 0; $x < $size_x; $x++) {
        // Save image pixel to the stream data
        $rgb = ImageColorAt($dest_img, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF; 
        $line .= sprintf("%02X%02X%02X",min(max($r,0),255),min(max($g,0),255),min(max($b,0),255));

        // Increate the line length counter; check if stream line needs to be terminated
        $ctr += 6;
        if ($ctr > MAX_LINE_LENGTH) { 
          $line .= "\n";
          $ctr = 0;
        }
      };

      $lines[] = $line;
    };

    return $lines;
  }
}
?>