g_var.q_url_params = yd_url_get_params('daily.php');

$("#active_left_daily_" + g_var.q_url_params[0]).addClass('active');

$(document).ready(function(){
    f_init();
});

function f_init() {
    p_url = g_var.gs_bjzx + 'BjzxDjAdmin/api_daily_learn/' + g_var.q_url_params[0]; 
    p_data = {
    };
    p_callback = function(data, status){
        var urls = JSON.parse(data);
        f_init_iframe(urls);
    };
    $.post(p_url, p_data, p_callback);
}

function f_init_iframe(urls) {
    for (var i = 0; i < urls.length; i++) {
        $('#daily_div').append("<iframe id='iframe" + i + "' width=100% height=500px></iframe>");
        $('#iframe' + i).attr('src', urls[i]['d_url']);
    }

}
