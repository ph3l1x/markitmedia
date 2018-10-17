<?php

/*	http://w-shadow.com/blog/2007/07/16/how-to-extract-all-urls-from-a-page-using-php/	*/

function crawl_page($page_url, $domain) {
/* $page_url - page to extract links from, $domain - 
    crawl only this domain (and subdomains)
    Returns an array of absolute URLs or false on failure. 
*/

/* I'm using cURL to retrieve the page */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $page_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

/* Spoof the User-Agent header value; just to be safe */
    curl_setopt($ch, CURLOPT_USERAGENT, 
      'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');

/* I set timeout values for the connection and download
because I don't want my script to get stuck 
downloading huge files or trying to connect to 
a nonresponsive server. These are optional. */
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);

/* This ensures 404 Not Found (and similar) will be 
    treated as errors */
    curl_setopt($ch, CURLOPT_FAILONERROR, true);

/* This might/should help against accidentally 
  downloading mp3 files and such, but it 
  doesn't really work :/  */
    $header[] = "Accept: text/html, text/*";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

/* Download the page */
    $html = curl_exec($ch);
	#echo $html;
    curl_close($ch);
    
    if(!$html) return false;

/* Extract the BASE tag (if present) for
  relative-to-absolute URL conversions later */
    if(preg_match('/<base[\s]+href=\s*[\"\']?([^\'\" >]+)[\'\" >]/i',$html, $matches)){
        $base_url=$matches[1];
    } else {
        $base_url=$page_url;
    }

    $links=array();
	$count = 0;
    
    $html = str_replace("\n", ' ', $html);
    preg_match_all('/<a[\s]+[^>]*href\s*=\s*([\"\']+)([^>]+?)(\1|>)/i', $html, $m);
	#print_r($m);
/* this regexp is a combination of numerous 
    versions I saw online; should be good. */
        
    foreach($m[2] as $url) {
        $url=trim($url);
	    
        /* get rid of PHPSESSID, #linkname, &amp; and javascript: */
        $url=preg_replace(
            array('/([\?&]PHPSESSID=\w+)$/i','/(#[^\/]*)$/i', '/&amp;/','/^(javascript:.*)/i'),
            array('','','&',''),
            $url);
        
        /* turn relative URLs into absolute URLs. 
          relative2absolute() is defined further down 
          below on this page. */
            $url = relative2absolute($base_url, $url);    
        
            // check if in the same (sub-)$domain
            if(preg_match("/^http[s]?:\/\/[^\/]*".str_replace('.', '\.', $domain)."/i", $url)) {
                //save the URL
				#print_r($url);
				#print_r($links);
                if(!in_array($url, $links)) { $links[$count] = $url; $count++; }

            } 
    }
    
    return $links;
}

//How To Translate a Relative URL to an Absolute URL
//This script is based on a function I found on the web with some small but significant changes.

function relative2absolute($absolute, $relative) {
        $p = @parse_url($relative);
        if(!$p) {
	        //$relative is a seriously malformed URL
	        return false;
        }
        if(isset($p["scheme"])) return $relative;
        
        $parts=(parse_url($absolute));
        
        if(substr($relative,0,1)=='/') {
            $cparts = (explode("/", $relative));
            array_shift($cparts);
        } else {
            if(isset($parts['path'])){
                 $aparts=explode('/',$parts['path']);
                 array_pop($aparts);
                 $aparts=array_filter($aparts);
            } else {
                 $aparts=array();
            }
           $rparts = (explode("/", $relative));
           $cparts = array_merge($aparts, $rparts);
           foreach($cparts as $i => $part) {
                if($part == '.') {
                    unset($cparts[$i]);
                } else if($part == '..') {
                    unset($cparts[$i]);
                    unset($cparts[$i-1]);
                }
            }
        }
        $path = implode("/", $cparts);
        
        $url = '';
        if($parts['scheme']) {
            $url = "$parts[scheme]://";
        }
        if(isset($parts['user'])) {
            $url .= $parts['user'];
            if(isset($parts['pass'])) {
                $url .= ":".$parts['pass'];
            }
            $url .= "@";
        }
        if(isset($parts['host'])) {
            $url .= $parts['host']."/";
        }
        $url .= $path;
        
        return $url;
}
print_r( crawl_page('http://www.markitmedia.com/print/', 'markitmedia.com') );
?>