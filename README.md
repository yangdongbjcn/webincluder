# webpage-includer


Webpage Includer tries to seperate web pages into web components, and each component has its own PHP, HTML, JS and CSS codes. Webpage Includer uses PHP include function to compose page components into one page. 

Before you use it, please modify the basepath.js and basepath.php, replace 'web' with the actual root folder name.

Webpage Includer （以下简称WI） 用于前端页面的模块化。WI使用PHP的include函数来实现页面模块的引入。每个页面的头和尾被分离出来，每个页面的top和left菜单也被保留出来。

如果您解压缩之后，将得到的web文件夹直接作为网站根目录，那么可以直接使用。如果您将web文件夹修改为其他名字，请在使用之前修改basepath.js和basepath.php，将其中的web替换为您实际的文件夹名。

如有任何问题，请访问微信公众号 yangdongpatent。

1，前后端分离 （page anywhere）

CodeIgniter 是一个轻量级的PHP框架。但CodeIgniter的默认前端代码目录，使用起来并不方便。

本项目基于前后端分离的想法，将前端代码从CodeIgniter中分离出去。前端代码需要独立的路由机制，因此使用Github项目webpage-includer的实现方式。本项目给出了开箱即用的前后端实施方式。

其中，文件夹service中存放的是前端代码。而文件夹server中存放的是后端代码。

2，快速复用增删改查 （model reuse）

将常用的增删改查操作抽象为library，在model中可以方便地复用。只需要指定所有字段，就可以快速实现。

3，给出了专利分析和可视化的示例网页和后台代码。

本项目面向专利分析环境，给出了一些文本处理的小例子。例如，从一列专利申请号中抽取出年份，以及进行直方图统计。具体而言，提供了如下功能： 1）TextMap。输入一个Text列表，以及一个Map映射表。输入的Text只要前N个字符在Map中能够找到，就将这个Text进行映射。

2）TextExtract。支持多种自定义文本模式。例如“NumAndNation”。也可以将文本输出为多个列表，或者字典格式。

3）TextMatch。支持自定义字符串匹配的列表。

更新： 1）可从https://codeigniter.com/ 获得最新的CodeIgniter。解压之后，将文件夹重命名为server。 2）将application/controllers/文件夹中的analysis文件夹拷贝过来。

更多的内容，将收录在微信公众号yangdongpatent。2019年出版的专著《玩转专利大数据——智慧容器助力专利分析与运营》第三章和第6.2节。或者直接访问网站http://zlrq.cn。