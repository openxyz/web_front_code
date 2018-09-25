## WEB页面寻址
1. 基于完整的页面,可以加入收藏夹
2. 利于SEO,即搜索引擎优化
3. 可以使用浏览器的历史导航

## 局部页面 
1. 使用#可实现页面内部的定位

## 问题: 基于js或ajax的局部页面更新
-  基于event触发, 无法生成固定地址,如收藏夹


## hashbang方案

http://www.ruanyifeng.com/blog/2011/03/url_hash.html

-  可实现收藏
-  可导航
-  SEO无效


## pushstate方案


- pajax http://blog.netsh.org/posts/pushstate-ajax_1339.netsh.html

- blog实例 http://www.welefen.com/use-ajax-and-pushstate.html
- 分页实例 http://www.zhangxinxu.com/wordpress/2013/06/html5-history-api-pushstate-replacestate-ajax/
- 分页实例 http://acgtofe.com/posts/2014/12/play-with-browser-history/
- SPA实例  https://segmentfault.com/a/1190000004127975


## history.js
- https://github.com/browserstate/history.js

## router
- https://github.com/cheft/minrouter
- https://github.com/flatiron/director
	- http://www.cnblogs.com/Showshare/p/director-chinese-tutorial.html
- https://github.com/visionmedia/page.js
