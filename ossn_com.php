<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

/**
 * Initialize the Component
 *
 * @return void;
 * @access private;
 */
function ossn_redirect_www() {
  $url = ossn_site_url();
  $parse = parse_url($url);
  $host = str_replace('www.', '', $parse['host']);
  if($_SERVER['HTTP_HOST'] ==  $host){
	 header("HTTP/1.1 301 Moved Permanently"); 
	 $url = rtrim($url, '/');
	 $url = "{$parase['scheme']}://www.{$parse['host']}{$_SERVER['REQUEST_URI']}";
	 header("Location: {$url}"); 
  }	
}
ossn_register_callback('ossn', 'init', 'ossn_redirect_www');
