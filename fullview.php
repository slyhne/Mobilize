<?php 
	/**
	 * jqmobile
	 * With mobile detection/redirecting
	 * @package jgmobile
	 * @author Kinkster.dk
	 * @copyright Kinkster.dk 2011
	 * @link http://elgg.com/
	 */

	// Force default view
	define('externalpage',true);
	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	global $CONFIG;
	
	session_start();    
	$_SESSION['desktop'] = 'full';
	$cururl = get_input('cururl');
	$cururl = ltrim($cururl,"/");
	header("Location: {$CONFIG->wwwroot}{$cururl}");
?>
