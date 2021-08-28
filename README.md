# webincluder


1. 中文说明

Web Includer （以下简称WI） 试图将网页分割成一个个网页模块（Component）。每个模块都包含自己的PHP、HTML、JS、CSS代码。 

举个例子，一个完整的网页，通常包含很多固定的内容，例如每个网页的HTML代码都包含<head>头。又例如每个网页都要包含导航条和菜单栏。又例如每个网页都要包含一些JavaScript库。这些重复的部分可以存储为单独的模块，而不必在所有的页面中都重复一遍。

WI基于PHP语言，PHP中的include函数可以将各个网页模块组合起来，成为一个完整的网页。

请不要修改文件夹名“web”和“server”，因为这两个名字用来确定网页的绝对路径。

请确保在您网页的URL中只有一个“web”。请确保您网页的URL中只有一个“server”。

如果想修改这两个文件夹名，请在使用之前修改basepath.js和basepath.php，将其中的“web”和“server”替换为您实际的文件夹名。

如果您只需要前端网页模块化，请使用“2019_webincluder”文件夹。如果您前端和后端代码都需要，请使用“2020_webchart_php_js”文件夹。


（1） 子文件夹 2018_webincluder

这是webincluder的最简单的例子。不包含任何后端代码。

一个PHP页面代码被拆分为三部分:
1) before.php 为页头，包括初始化、顶部菜单，左边菜单；
2) after.php 为页尾，包括右边菜单；
3) 其余的部分为页中，即与daily逻辑相关的内容；都存放在子文件夹daily中。

其中，before.php 的页面内容：
1）路径约定，basepath.php；
2）html页面开始部分，begin.php；
3）初始化内容，before_config.php；
4）顶部菜单，menu_top.php；
5）左边菜单，menu_left。

其中，after.php 的页面内容：
1) 页面的footer，用于显示版权、联系方式等内容;
2）html页面结束部分，end.php。


（2） 子文件夹 2019_webchart

这个例子包含前端和后端代码。前端代码在文件夹“web”中，后端代码在文件夹“server”中。

1）这个例子是为专利分析生产在线图表。

具体来说，图表可视化是对Echarts的封装。Echarts的功能强大导致其配置也比较复杂，本项目对其进行了封装和简化。

由于Echarts需要的数据是JSON格式，而专利数据库一般二维表格形式，本项目提供了从二维表到JSON结构的统计和转换功能。

该例子包括提取国别、检索式解析、申请人标准化、提取公开号、提取DWPI号、年份直方图、统计IPC、气泡散点图、气泡矩阵图、世界地图、中国地图等多种图表。

更多专利分析，请参见本人的Github项目专利容器，http://github.com/yangodongbjcn/patent-container

2) 后台框架CodeIgniter

CodeIgniter 是一个轻量级的PHP框架。 可从https://codeigniter.com/ 获得最新的CodeIgniter。解压之后，将文件夹重命名为server。

但CodeIgniter的默认前端代码目录，使用起来并不方便。

本项目基于前后端分离的想法，将前端代码从CodeIgniter中分离出去。前端代码需要独立的路由机制，因此使用WI的实现方式，文件夹web中存放的是前端代码。

CodeIgniter默认的数据库增删改查操作，会产生较多的重复代码。

本项目将常用的增删改查操作抽象为library，在CodeIgniter的model中可以方便地复用。只需要指定所有字段，就可以快速实现。


（3）更多的内容，将收录在微信公众号yangdongpatent（专利容器）。

在线专利分析小工具，可访问网站http://zlrq.cn。


2. Introduction in English 

Web Includer (WI) tries to seperate web pages into web page components, and each component has its own PHP, HTML, JS and CSS codes. 

WI is based on PHP programming language. The PHP function 'include' is used to include page components into a complete web page. 

Please do not change the names of folders 'web' and 'server', because these names are used to determine the absolute path. 

Please make sure there is only one 'web' in any URL of your website. Please make sure there is only one 'server' in any URL of your website.

If you have to change these two folder names, please modify the basepath.js and basepath.php, replace 'web' and 'server' with your own names.


(1) Subfolder "2018_webincluder"

It is the simplest example of webincluder. It does not contain any backend codes.

(2) Subfolder "2019_webchart_php_js"

This example contains both frontend and backend codes. The frontend codes are in the folder 'web', and the backend codes are in the folder 'server'.

This example is about generating online charts for patent analysis. 

（3）If you have any question, please search 'yangdongpatent' in WeChat App. 

Please visit http://zlrq.cn, for a simple online patent analysis toolkit.
