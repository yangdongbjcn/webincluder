# webpage-includer

1. Introduction in English 

Webpage Includer tries to seperate web pages into web page components, and each component has its own PHP, HTML, JS and CSS codes. Webpage Includer is based on PHP programming language. The function 'include' is used to compose page components into a complete web page. 

In this library, please do not change the names of folders 'web' and 'server'. If you have to change them, please modify the basepath.js and basepath.php, replace 'web' and 'server' with your own names.

If you have any question, please search 'yangdongpatent' in WeChat App. 

2. 中文说明

Webpage Includer （以下简称WI） 用于网页的模块化（Component）。 

一个完整的网页，通常包含很多固定的内容，例如每个网页的HTML代码都包含<head>头。又例如每个网页都要包含导航条和菜单栏。又例如每个网页都要包含一些JavaScript库。这些重复的部分可以存储为单独的模块，而不必在所有的页面中都重复一遍。

WI基于PHP语言，PHP中的include函数可以将各个网页模块组合起来，成为一个完整的网页。

本库的文件夹名“web”和“server”请不要修改。如果想修改为自己喜欢的名字，请在使用之前修改basepath.js和basepath.php，将其中的“web”和“server”替换为您实际的文件夹名。

如有任何问题，请访问微信公众号 yangdongpatent。


3. 前后端分离

WI实现了前端网页的模块化，但实际的项目也包含后端代码。

如果您只需要前端网页模块化，请使用“2019_single_project_demo”文件夹。如果您前端和后端代码都需要，请使用“2021_multiple_projects_demo”文件夹。

CodeIgniter 是一个轻量级的PHP框架。但CodeIgniter的默认前端代码目录，使用起来并不方便。

本项目基于前后端分离的想法，将前端代码从CodeIgniter中分离出去。前端代码需要独立的路由机制，因此使用WI的实现方式，文件夹web中存放的是前端代码。而CodeIgniter的后端代码，则存放在文件夹server中。

4. 快速复用增删改查

将常用的增删改查操作抽象为library，在CodeIgniter的model中可以方便地复用。只需要指定所有字段，就可以快速实现。

5. 给出了专利分析和可视化的示例网页和后台代码。

本项目面向专利分析环境，给出了一些文本处理的小例子。例如，从一列专利申请号中抽取出年份，以及进行直方图统计。具体而言，提供了如下功能： 

1）TextMap。输入一个Text列表，以及一个Map映射表。输入的Text只要前N个字符在Map中能够找到，就将这个Text进行映射。

2）TextExtract。支持多种自定义文本模式。例如“NumAndNation”。也可以将文本输出为多个列表，或者字典格式。

3）TextMatch。支持自定义字符串匹配的列表。

更新： 1）可从https://codeigniter.com/ 获得最新的CodeIgniter。解压之后，将文件夹重命名为server。 2）将application/controllers/文件夹中的analysis文件夹拷贝过来。

6. 更多的内容，将收录在微信公众号yangdongpatent。 2019年出版的专著《玩转专利大数据——智慧容器助力专利分析与运营》第三章和第6.2节。或者直接访问网站http://zlrq.cn。