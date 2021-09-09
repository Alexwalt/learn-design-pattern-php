装饰者模式

装饰着模式和代理模式在实现上，代码基本一致
他们却别主要在使用上

代理模式，每次调用一次就是套一层娃

装饰这模式，是可以套多层娃
```php
interface IA {
    pubilc function f();
}
class A impelements IA{
    pubilc function f(){
    }
}
class ProxyA impelements IA{
    protected $a;
    public function __construct(IA $a){
        $this->a = $a;
    }
    pubilc function f(){
        //balabala
        $this->a->f();
        //balabala
    }
}

$implA = new ProxyA(new A());
$implA->f();
```

```php
interface IA {
    pubilc function f();
}
class A impelements IA{
    pubilc function f(){
    }
}
class DecoratorA impelements IA{
    protected $a;
    public function __construct(IA $a){
        $this->a = $a;
    }
    pubilc function f(){
        //balabala
        $this->a->f();
        //balabala
    }
}
class DecoratorB impelements IA{
    protected $a;
    public function __construct(IA $a){
        $this->a = $a;
    }
    pubilc function f(){
        //balabala
        $this->a->f();
        //balabala
    }
}
class DecoratorC impelements IA{
    protected $a;
    public function __construct(IA $a){
        $this->a = $a;
    }
    pubilc function f(){
        //balabala
        $this->a->f();
        //balabala
    }
}
//套娃开始
$implA = new DecoratorA(new A());
$implA = new DecoratorB($implA);
$implA = new DecoratorC($implA);
$implA->f();
```
我是知道整理这篇文章的时候，才真正明白这两种模式的区别