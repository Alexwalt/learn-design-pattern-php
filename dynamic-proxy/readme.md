# 代理模式
## 定义

> 为其他对象提供一种代理以控制对这个对象的访问
## 使用场景
在不改变原始类（或叫被代理类）代码的情况下，通过引入代理类来给原始类附加功能。比如：监控、统计、鉴权、限流、事务、幂等、日志。将这些附加功能与业务功能解耦，放到代理类统一处理，让程序员只需要关注业务方面的开发。除此之外，代理模式还可以用在 RPC、缓存等应用场景中。

## 需求描述
性能计数器，用来收集类中函数的执行时间。

## 动态代理
以上的代码实现还存在以下问题：
- 需要在代理类中，将原始类中的所有的方法，都重新实现一遍，并且为每个方法都附加相似的代码逻辑。
- 如果要添加的附加功能的类有不止一个，我们需要针对每个类都创建一个代理类。

所谓动态代理（`Dynamic Proxy`）就是不事先为每个原始类编写代理类，而是在运行的时候，动态地创建原始类对应的代理类，然后在系统中用代理类替换掉原始类。在`PHP`中实现动态代理的底层依赖就是**反射**，通过**反射**可以获取类中所有的属性和方法，所以反射其实会破坏类的封装性。


## 其他参考：
[1]. [极客时间《设计模式》（王争）](http://gk.link/a/10xeZ)
[2].《[研磨设计模式》（陈臣、王斌）](https://book.douban.com/subject/5343318/)
[3]. [《Learning PHP设计模式》](https://book.douban.com/subject/25952240/)
[4]. [从零使用composer初始化PSR-4项目](https://blog.csdn.net/hl449006540/article/details/119188623)
[5]. https://time.geekbang.org/column/article/201823
[6] [https://learnku.com/articles/34288](https://learnku.com/articles/34288)
[7] [https://learnku.com/articles/7538/the-application-of-reflection-in-php](https://learnku.com/articles/7538/the-application-of-reflection-in-php)
[8] [https://learnku.com/articles/37162](https://learnku.com/articles/37162)
[9] [https://gitee.com/obamajs/php-base-container/blob/master/Container.php](https://gitee.com/obamajs/php-base-container/blob/master/Container.php)
[10] [https://www.php.net/manual/zh/book.reflection.php](https://www.php.net/manual/zh/book.reflection.php)