$(document).ready(function(){
	f_init_url();
	f_init_url_admin();
});

function f_init_url() {
	var t_url = g_var.g_bjzx_dj + 'daily.php' + '/newest';
	$('#left_daily_newest').attr('href', t_url);
}

function f_init_url_admin() {
	var t_url = g_var.g_bjzx_dj + 'admin.php';
	$('#left_daily_view_urls').attr('href', t_url);
	var t_url = g_var.g_bjzx_dj + 'dailyadmin_add_url.php';
	$('#left_daily_add_url').attr('href', t_url);
}