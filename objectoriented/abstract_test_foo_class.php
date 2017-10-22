<?php 

    class Foo extends MyAbstractClass {
        public function myAnotherAbstractionFunction()
        {}
    
        public function myAbstractFunction()
        {}
        
        // https://stackoverflow.com/questions/1814821/interface-or-an-abstract-class-which-one-to-use
        // The function doNotCallThisFunction() is not forced because it is not abstract.
        // Though you can call it if you want to.
        
    }

?>