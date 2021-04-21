$("#active_left_dailyadmin_add_url").addClass('active');

$(document).ready(function(){

	f_init();

	$("#dailyadmin_add_url").click(function(){

		var p_url = g_var.gs_bjzx + '/BjzxDjAdmin/api_dailyadmin_add_url';
		
		var p_data = {
			d_submitter: '',
			d_type: $('#d_type').val(),
			d_sub_type: $('#d_sub_type').val(),
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

function f_init() {
	var t_types = g_var.pre_daily_types;
	for(var t_type in t_types) {
		if (typeof(t_types[t_type]) != 'function') {
			$('#d_type').append("<option value='" + t_type + "'>" + t_types[t_type] + "</option>");
		}
	}
}
