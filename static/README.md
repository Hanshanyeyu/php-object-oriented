# 后期静态绑定

参考：http://php.net/manual/zh/language.oop5.late-static-bindings.php#language.oop5.late-static-bindings
深入 PHP：面向对象、模式和实践（第三版）第4章 高级特征 延迟静态绑定：static 关键字

总结：static 指向的是调用该静态方法时的类本身。而 self 指向的是当前类，它不是子类也不是父类。