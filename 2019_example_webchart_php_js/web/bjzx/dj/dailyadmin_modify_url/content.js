g_var.q_url_params = yd_url_get_params('dailyadmin_modify_url.php');

$(document).ready(function(){

	f_get_url();

	$("#dailyadmin_modify_url").click(function(){

		var p_url = g_var.gs_bjzx + '/BjzxDjAdmin/api_dailyadmin_modify_url/' + g_var.q_url_params[0];
		
		var p_data = {
			d_submitter: '',
			// d_type: $('#d_type').val(),
			d_date: $('#d_date').val(),
			d_enddate: $('#d_enddate').val(),
			d_comment: $('#d_comment').val(),
			d_title: $('#d_title').val(),
			d_url: $('#d_url').val()
		};

		p_callback = function(data, status){
			var message = JSON.parse(data);
			alert(message['message']);
		};
		$.post(p_url, p_data, p_callback);

	});/*click function*/
});

function f_get_url() {
	var p_url = g_var.gs_bjzx + 'BjzxDjAdmin/api_dailyadmin_get_url/' + g_var.q_url_params[0];
		
	var p_data = {
	};

	p_callback = function(data, status){
		// alert(status);
		var url = JSON.parse(data);
		// $('#d_type').val(g_var.pre_daily_types[url['d_type']]);
		$('#d_title').val(url['d_title']);
		$('#d_url').val(url['d_url']);
		$('#d_date').val(url['d_date']);
		$('#d_enddate').val(url['d_enddate']);
		$('#d_comment').val(url['d_comment']);
	};
	$.post(p_url, p_data, p_callback);
}
