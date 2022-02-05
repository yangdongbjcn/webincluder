var t_url = location.href.split('wiweb');

var g_var = {}; 
g_var.g_web_father = t_url[0];
g_var.g_root = g_var.g_web_father + 'wiweb/';

g_var.g_page = g_var.g_root + 'page/';
g_var.g_subpage = g_var.g_page + 'subpage/';
g_var.g_subsubpage = g_var.g_subpage + 'subsubpage/';

g_var.g_common_web = g_var.g_web_father + 'wicommon/';