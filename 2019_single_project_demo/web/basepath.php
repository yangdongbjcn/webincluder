<?php

	$t_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	$g_root = getParent($t_url, 'web') . '/';

	$g_comn = $g_root . 'common/';
	$g_resc = $g_comn . 'resources/';
	$g_incl = $g_comn . 'includes/';

	$g_page = $g_root . 'page/';
	$g_subpage = $g_page . 'subpage/';
	$g_subsubpage = $g_subpage . 'subsubpage/';

	function getParent($t_url, $t_key) {
		while(basename($t_url) != $t_key) {
		  $t_url = dirname($t_url);
		}
		return $t_url;
	}
?>