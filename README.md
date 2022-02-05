# webincluder


1. 中文说明

Web Includer （以下简称WI） 试图将网页分割成一个个网页模块（Component）。每个模块都包含自己的PHP、HTML、JS、CSS代码。 

举个例子，一个完整的网页，通常包含很多固定的内容，例如每个网页的HTML代码都包含<head>头。又例如每个网页都要包含导航条和菜单栏。又例如每个网页都要包含一些JavaScript库。这些重复的部分可以存储为单独的模块，而不必在所有的页面中都重复一遍。

WI基于PHP语言，PHP中的include函数可以将各个网页模块组合起来，成为一个完整的网页。

请不要修改文件夹名“wiweb”、“wicommon”等名字，因为这几个名字用来确定网页的绝对路径。

请确保在您网页的URL中这些名字都是唯一的。

如果想修改这些文件夹名，请在使用之前修改basepath.js和basepath.php，将其中的“wiweb”等名字替换为您实际的文件夹名。

（1） 子文件夹 wiweb

这是webincluder的最简单的例子。不包含任何后端代码。

一个PHP页面被拆分为三部分:
1) before.php 为页头，包括初始化、顶部菜单，左边菜单；
2) after.php 为页尾，包括右边菜单；
3) 其余的部分为与当前页码相关的内容，包括 content.css、content.js、content.php。

其中，before.php 的页面内容：
1）路径约定，basepath.php；
2）html页面开始部分，begin.php；
3）顶部菜单，menu_top.php；

其中，after.php 的页面内容：
1) 页面的footer，用于显示版权、联系方式等内容；
2）html页面结束部分，end.php。

（2） 子文件夹 wicommon

这是所有页面共享的内容，包括：
1）includes文件夹，包括共享的页面组件，例如begein.php、menu_top.php；
2）resources文件夹，包括第三方库，例如bootstrap、jquery。


2. Introduction in English 

Web Includer (WI) tries to seperate web pages into web page components, and each component has its own PHP, HTML, JS and CSS codes. 

WI is based on PHP programming language. The PHP function 'include' is used to include page components into a complete web page. 

Please do not change the names of folders 'wiweb' and 'wicommon', because these names are used to determine the absolute path. 

Please make sure there names are unique in any URL of your website. And this is the biggest problem of this project.

If you have to change these two folder names, please modify the basepath.js and basepath.php, replace 'exampleweb' and other names with your own names.

(1) Subfolder "wiweb"

It is the simplest example of webincluder. It does not contain any backend codes.

A PHP page is divided into three parts:

1) before. PHP is the page header, including initialization, top menu and left menu;

2) after. PHP is the end of the page, including the menu on the right;

3) The rest is related to the current page number, including content css、content. js、content. php.

Where, before.php page content:

1) Path convention, basepath php;

2) At the beginning of the HTML page, begin php;

3) Top menu_ top. php;

Where, after.php page content:

1) The footer of the page is used to display copyright, contact information and other contents;

2) HTML page end, end php.

(2) Subfolder wicommon

These are the content shared by all pages, including:

1) Includes folder, including shared page components, such as begein php、menu_ top. php;

2) Resources folder, including third-party libraries, such as bootstrap and jQuery.
