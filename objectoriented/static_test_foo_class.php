<?php 

    class Foo {
        public static $my_static = 'foo';
        
        public function staticValue() {
            return self::$my_static;
        }
    }     
    
    print Foo::$my_static . "\n"; // Direct call to static variable.
 
    $foo = new Foo();
    
    print $foo -> staticValue() . "\n";
    
    
    // WTF. So I can declare the same class Foo from different files
    // And yet treat them as the same class because of the "new Foo()" ???
    
    // Fatal error: Call to undefined method Foo::doNotCallThisFunction() on line 20
    // No. I cannot. The Eclipse for PHP is just confused. Might be a bug?
    
    // print $foo -> doNotCallThisFunction(); // Invalid but suggested by Eclipse
    
    // print $foo -> myAbstractFunction();  // Invalid but suggested by Eclipse
?>