# webpage-includer

1. Introduction in English 

Webpage Includer tries to seperate web pages into web page components, and each component has its own PHP, HTML, JS and CSS codes. Webpage Includer is based on PHP programming language. The function 'include' is used to compose page components into a complete web page. 

In this library, please do not change the names of folders 'web' and 'server'. If you have to change them, please modify the basepath.js and basepath.php, replace 'web' and 'server' with your own names.


2.1 Subfolder "2019_webpage_includer"

It does not contain any backend codes.

2.2 Subfolder "2020_webchart_php_js"

It contains both frontend and backend codes.


If you have any question, please search 'yangdongpatent' in WeChat App. 


2. 中文说明

Webpage Includer （以下简称WI） 用于网页的模块化（Component）。 

一个完整的网页，通常包含很多固定的内容，例如每个网页的HTML代码都包含<head>头。又例如每个网页都要包含导航条和菜单栏。又例如每个网页都要包含一些JavaScript库。这些重复的部分可以存储为单独的模块，而不必在所有的页面中都重复一遍。

WI基于PHP语言，PHP中的include函数可以将各个网页模块组合起来，成为一个完整的网页。

本库的文件夹名“web”和“server”请不要修改。如果想修改为自己喜欢的名字，请在使用之前修改basepath.js和basepath.php，将其中的“web”和“server”替换为您实际的文件夹名。

如果您只需要前端网页模块化，请使用“2019_webpage_includer”文件夹。如果您前端和后端代码都需要，请使用“2020_webchart_php_js”文件夹。

2.1 前端网页模块化 2019_webpage_includer

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

2.2 前后端分离 2020_webchart_php_js

WI实现了前端网页的模块化，但实际的项目也包含后端代码。 本项目面向专利分析环境，给出了一些文本处理的小例子。

本项目的可视化是对Echarts的封装。由于Echarts需要的数据是JSON格式，而专利数据库一般二维表格形式，本项目提供了从二维表到JSON结构的统计和转换功能。Echarts的功能强大导致其配置也比较复杂，本项目对其进行了封装和简化。

本项目属于专利容器的可视化部分，使用JavaScript语言实现。本项目提供了基础版的专利分析可视化功能。包括提取国别、检索式解析、申请人标准化、提取公开号、提取DWPI号、年份直方图、统计IPC、气泡散点图、气泡矩阵图、世界地图、中国地图等多种图表。专利容器具体参见本人的Github项目，http://github.com/yangodongbjcn/patent-container

1) 后台框架CodeIgniter

CodeIgniter 是一个轻量级的PHP框架。 可从https://codeigniter.com/ 获得最新的CodeIgniter。解压之后，将文件夹重命名为server。

但CodeIgniter的默认前端代码目录，使用起来并不方便。 本项目基于前后端分离的想法，将前端代码从CodeIgniter中分离出去。前端代码需要独立的路由机制，因此使用WI的实现方式，文件夹web中存放的是前端代码。

2）快速复用增删改查

本项目将常用的增删改查操作抽象为library，在CodeIgniter的model中可以方便地复用。只需要指定所有字段，就可以快速实现。

3）专利分析文本处理示例功能： 

--TextMap。输入一个Text列表，以及一个Map映射表。输入的Text只要前N个字符在Map中能够找到，就将这个Text进行映射。

--TextExtract。支持多种自定义文本模式。例如“NumAndNation”。也可以将文本输出为多个列表，或者字典格式。

--TextMatch。支持自定义字符串匹配的列表。

6. 更多的内容，将收录在微信公众号yangdongpatent。 或者直接访问网站http://zlrq.cn。

2019年出版的专著《玩转专利大数据——智慧容器助力专利分析与运营》第三章和第6.2节。