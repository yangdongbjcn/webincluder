$(document).ready(function(){
	f_init_url();
});

function f_init_url() {
	var t_url = g_var.g_bjzx_dj + 'daily.php' + '/newest';
	$('#left_daily_newest').attr('href', t_url);
	
	// var t_url = g_var.g_daily + 'daily.php' + '/yqzq';
	// $('#left_daily_kjyq').attr('href', t_url);

	// var t_url = g_var.g_bjzx_dj + 'daily.php' + '/yzyh100';
	// $('#left_daily_yzyh100').attr('href', t_url);

	// var t_url = g_var.g_bjzx_dj + 'daily.php' + '/yzyh50';
	// $('#left_daily_yzyh50').attr('href', t_url);

	var t_url = g_var.g_bjzx_dj + 'daily.php' + '/wen30';
	$('#left_daily_wen30').attr('href', t_url);
}

