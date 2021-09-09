
# 定义
用原型实例指定创建对象的种类，并通过拷贝这些原型创建新的对象。原型模式就是利用内存“内存拷贝+修改属性”的方式，来大幅降低`new` 对象所带来的系统消耗。
# 应用场景
对象的创建成本比较大，而同一个类的不同对象之间差别不大（大部分字段都相同），在这种情况下，我们可以利用对已有对象（原型）进行复制（或者叫拷贝）的方式，来创建新对象，以达到节省创建时间的目的。`PHP`有`clone`关键字，可以使用`clone`关键字直接对实例进行拷贝
```php
$inst = new A();
$instB = clone $inst; //clone A
```

# 标准实现方法


```php
class Resource {
    public $id;
    public $name;
    public $type;
}

$instA = new Resource();
$instB->id = 1;
$instA->name = 'a' 

$instB = clone $instA;
$instB->id=2;
$instB->name='B';
var_dump($instA);
var_dump($instB);
```

```php
class Resource {
    public $id;
    public $name;
    public $type;
    // 函数在被clone $inst会执行，可以一些修改属性的操作
    public function __clone()
    {
        
    }
}

$instA = new Resource();
$instB->id = 1;
$instA->name = 'A' 

$instB = clone $instA;
$instB->id=2;
$instB->name='B';
var_dump($instA);
var_dump($instB);
```


其他参考：
[1]. [极客时间《设计模式》（王争）](http://gk.link/a/10xeZ)
[2].《[研磨设计模式》（陈臣、王斌）](https://book.douban.com/subject/5343318/)
[3]. [《Learning PHP设计模式》](https://book.douban.com/subject/25952240/)
[4]. [从零使用composer初始化PSR-4项目](https://blog.csdn.net/hl449006540/article/details/119188623)