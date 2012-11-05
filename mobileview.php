<?php
	/**
	 * jqmobile
	 * With mobile detection/redirecting
	 * @package jqmobile
	 * @author Kinkster.dk
	 * @copyright Kinkster.dk 2011
	 * @link http://elgg.com/
	 */

	// remove forced default view
	define('externalpage',true);
	require_once(dirname(dirname(dirname(__FILE__))) . "/engine/start.php");
	global $CONFIG;

	session_start();    
	$_SESSION['desktop'] = 'mobile';
	$cururl = get_input('cururl');
	$cururl = ltrim($cururl,"/");
	header("Location: {$CONFIG->wwwroot}{$cururl}");
?>
