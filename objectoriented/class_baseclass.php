<?php 

    class BaseClass {
        public function test() {
            echo "BaseClass::test() is called. <br />";
        }
        
        final public function moreTesting() {
            echo "BaseClass::moreTesting() is called. <br />";
        }
    }
    
    class ChildClass extends BaseClass {
        public function test() {
            echo "ChildClass::test() is called. <br />";
        }
        
        // Fatal error: Cannot override final method BaseClass::moreTesting()
        // public function moreTesting() {
        //    echo "ChildClass::moreTesting() is called. <br />";
        // }
    }
    
    $base = new BaseClass();
    print $base -> test();
    print $base -> moreTesting();
    
    $child = new ChildClass();
    print $child -> test();
    print $child -> moreTesting();
    
    

?>