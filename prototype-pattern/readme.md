#原型设计模式
我的理解原型设计模式就是
内存拷贝，然后修改个别属性值，以复制+修改的方式降低`new` 对象所带来的系统消耗
PHP有clone关键字，可以使用clone关键字直接对类新型拷贝


```
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
    // 函数在被clone $inst会被执行，可以一些修改属性的操作
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