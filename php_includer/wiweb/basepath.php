<?php

	$t_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	$g_project = getParent($t_url, 'wiweb') . '/';

	function getParent($t_url, $t_key) {
		while(basename($t_url) != $t_key) {
		  $t_url = dirname($t_url);
		}
		return $t_url;
	}

	$g_root = dirname($g_project) . '/';
	
	$g_comn = $g_root . 'wicommon/';
	$g_resc = $g_comn . 'resources/';
	$g_incl = $g_comn . 'includes/';

	
	$g_page = $g_project . 'top_middle_bottom/';
	$g_subpage = $g_page . 'subpage/';
	$g_subsubpage = $g_subpage . 'subsubpage/';


	$g_page2 = $g_project . 'top_left_center_right_bottom/';	
?>