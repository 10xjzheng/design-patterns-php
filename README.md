#设计模式--php代码示例（《设计模式GOF》笔记）博客地址（https://www.jianshu.com/u/4ff189e8d8ac）
##1 创建型模式（creational）
###1.1 ABSTRACT FACTORY（抽象工厂）——对象创建型模式
提供一个创建一系列相关或相互依赖对象的接口，而无需指定它们具体的类
![AbstractFactory](/img/AbstractFactory.png)
###1.2 BUILDER（生成器）——对象创建型模式
将一个复杂对象的构建与它的表示分离，使得同样的构建过程可以创建不同的表示。
![Builder](/img/Builder.png)
###1.3 FACTORY METHOD（工厂方法） ——对象创建型模式
定义一个用于创建对象的接口，让子类决定实例化哪一个类。Factory Method使一个类的实例化延迟到其子类。
![FactoryMethod](/img/FactoryMethod.png)
###1.4 PROTOTYPE（原型） — 对象创建型模式
用原型实例指定创建对象的种类，并且通过拷贝这些原型创建新的对象。
![Prototype](/img/Prototype.png)
###1.5 SINGLETON（单例） — 对象创建型模式
保证一个类仅有一个实例，并提供一个访问它的全局访问点。
![Singleton](/img/Singleton.png)
##2 结构型模式（structural）
###2.1 ADAPTER（适配器） — 类对象结构型模式
将一个类的接口转换成客户希望的另外一个接口。Adapter模式使得原本由于接口不兼容而不能一起工作的那些类可以一起工作。
![Adapter](/img/Adapter.png)
###2.2 BRIDGE（桥接） — 对象结构型模式
将抽象部分与它的实现部分分离，使它们都可以独立的变化。
![Bridge](/img/Bridge.png)
###2.3 COMPOSITE（组合） — 对象结构型模式
将对象组合成树形结构以表示“部分-整体”的层次结构。Composite使得用户对单个对象和组合对象的使用具有一致性。
![Composite](/img/Composite.png)
###2.4 DECORATOR（装饰） — 对象结构型模式
动态地给一个对象添加一些额外的职责。就增加功能来说，Decorator模式相比生成子类更加灵活。
![Decorator](/img/Decorator.png)
###2.5 FACADE（外观） — 对象结构型模式
为子系统中的一组接口提供一个一致的界面，Facade模式定义了一个高层接口，这个接口使得这一子系统更加容易使用。
![Facade](/img/Facade.png)
###2.6 FACADE（外观） — 对象结构型模式
为子系统中的一组接口提供一个一致的界面，Facade模式定义了一个高层接口，这个接口使得这一子系统更加容易使用。
![Facade](/img/Facade.png)
###2.7 PROXY（代理） — 对象结构型模式
为其它对象提供一种代理以控制对这个对象的访问。
![Proxy](/img/Proxy.png)
##3 行为型模式
###3.1 CHAIN OF RESPONSIBILITY(职责链) — 对象行为型模式
使多个对象都有机会处理请求，从而避免请求的发送者和接受者之间的耦合关系。将这些对象连成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止。
![Chain](/img/Chain.png)
###3.2 COMMAND（命令） — 对象行为型模式
将一个请求封装为一个对象，从而使你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
![Command](/img/Command.png)
###3.3 INTERPRETER(解释器)—类行为型模式
将一个请求封装为一个对象，从而使你可用不同的请求对客户进行参数化；对请求排队或记录请求日志，以及支持可撤消的操作。
![Interpret](/img/Interpret.png)
###3.4 ITERATOR(迭代器) — 对象行为型模式
提供一种方法顺序访问一个聚合对象中的各个元素，而又不需暴露该对象的内部表示。
![Iterator](/img/Iterator.png)
###3.5 MEDIATOR(中介者)—对象行为型模式
用一个中介对象来封装一系列的对象交互。中介者使各对象不需要显式地相互引用，从而使其耦合松散，而且可以独立地改变它们之间的交互。
![Mediator](/img/Mediator.png)
###3.6 MEMENTO（备忘录）—对象行为型模式
在不破坏封装性的前提下，捕获了一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可以将该对象恢复到原先保存的状态。
![Memento](/img/Memento.png)
###3.7 OBSERVER（观察者） —对象行为型模式
定义对象间的一种一对多的依赖关系，当一个对象的状态发生改变时，所有依赖于它的对象都得到通知并被自动更新。
![Observer](/img/Observer.png)
###3.8 STATE（状态） — 对象行为型模式
允许一个其对象在其内部状态改变时改变它的行为，对象看起来似乎修改了它的类。
![State](/img/State.png)
###3.9 STRATEGY(策略) — 对象行为型模式
定义一系列的算法，把它们一个个封装起来，并且使它们可相互替换。本模式使得算法可独立于使用它的客户而变化。
![Strategy](/img/Strategy.png)
###3.10 TEMPLATE METHOD(模板方法) — 类行为型模式
定义一个操作的算法的骨架，而将一些步骤延迟到子类中。TemplateMethod使得子类可以不改变一个算法的结构即可重定义该算法的某些特定步骤。
![TemplateMethod](/img/TemplateMethod.png)
###3.11 VISITOR（访问者） — 对象行为型模式
表示一个作用于某对象结构中的各元素操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
![Visitor](/img/Visitor.png)