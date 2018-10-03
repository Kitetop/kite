# kite
> 一个轻量级的、个人的 PHP 框架

````
1. 此框架今后要能够配合composer使用，kite目录作为该框架的核心函数库以及类库

2.app/Kernel是上一层级的核心目录，它负责对kite目录下的函数库类库的引用

3.kite目录下的顶层命名空间定义为 Kite

````

> 此框架的路由规则

````
1. /news => 指向Action目录下的news类

2. /user/news/:id => 指向Action目录下的User目录下的news类，并且传递了一个id的值

tip：此框架的自定义路由前两字段指向目录结构，后面的代表的是传递数据，即所支持的路由的形式为：
     /news;
     /users/news;
     /users/news/id/1;
     /users/news/username/kitetop/password/1363215999@qq.com => 其中username=kitetop,password=1363215999@qq.com

````
