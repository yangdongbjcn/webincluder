<?php

	$t_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	
	$g_web = getParent($t_url, 'zlrqweb') . '/';

	$g_web_father = dirname($g_web) . '/';

	$g_yd_about = $g_web . 'about/';
	$g_yd__yangdong = $g_yd_about . 'yangdong/';

	
	$g_yd_info = $g_web_father . 'common_web/';
	$g_yd__includes = $g_yd_info . 'includes/';
	$g_yd__pages = $g_yd_info . 'pages/';
	$g_yd__resources = $g_yd_info . 'resources/';
	$g_yd__container = $g_yd_info . 'yd_container/';
	$g_yd__data = $g_yd_info . 'yd_data/';

	
	$g_yd_patent = $g_web . 'patent/';
	$g_yd__analysis = $g_yd_patent . 'analysis/';
	$g_yd__chart = $g_yd_patent . 'chart/';
	$g_yd__database = $g_yd_patent  . 'database/';
	$g_yd__map = $g_yd_patent . 'map/';

	
	$g_yd_science = $g_web . 'science/';
	$g_yd__hybrid_ai = $g_yd_science . 'hybrid_ai/';

	function getParent($t_url, $t_key) {
		while(basename($t_url) != $t_key) {
		  $t_url = dirname($t_url);
		}
		return $t_url;
	}

	$g_rela_yd2_2_chart = '../../../' . 'patent/chart/';
?>