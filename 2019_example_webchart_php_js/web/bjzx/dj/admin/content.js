$("#active_left_dailyadmin_view_urls").addClass('active');

$(document).ready(function(){

	f_init();

});

function f_init() {
	var p_url = g_var.gs_bjzx + '/BjzxDjAdmin/api_dailyadmin_view_urls';
		
	var p_data = {
	};

	p_callback = function(data, status){
		var urls = JSON.parse(data);
		tf_datatables_urls(urls);
	};
	$.post(p_url, p_data, p_callback);
}


function tf_datatables_urls(t_data) {
    $('#dailyadmin_view_urls').DataTable({
        destroy: true,
        data: t_data,//[{t_pub_num: 'CNXXXXX'},{t_pub_num: 'CNXXXXX'},{t_pub_num: 'CNXXXXX'}],
        columns: [
        {   "data": "d_type"    }
        ,{	"data": "d_title"	}
        ,{	"data": "d_url"	}
        ,{	"data": "d_date"	}
        ,{	"data": "d_enddate"	}
        ,{	"data": "d_submitter"	}
        ,{	"data": "d_comment"	}
        ,{	"data": null, "defaultContent": '编辑和删除'	}
        ]
        ,"columnDefs": [
	    {
    		"render": function(data, type, row, meta) {
                return '<span>' + g_var.pre_daily_types[row.d_type] + '</span>';
        	}, "targets": 0
        },{
    		"render": function(data, type, row, meta) {
    			var t_html1 = "<a class= 'btn btn-info' href='" + g_var.g_bjzx_dj + "dailyadmin_modify_url.php/" + row.d_id + "'>编辑</a>";
			    var t_html2 = "<a class= 'btn btn-danger' href='" + g_var.gs_bjzx + "BjzxDjAdmin/api_dailyadmin_del_url/" + row.d_id + "' onclick='return f_delete_confirm();'><i class ='icon-trash icon-white'></i>删除</a>";
			    var t_html = t_html1 + t_html2;		  
                return t_html;
        	}, "targets": 7
        }]
        ,pageLength: 100
		,searching: false
		,paging: false
    });
}


function f_delete_confirm(){
	if(window.confirm("Delete this act? ")){
	 	return true;
	}else{
	 	return false;
	}
}
