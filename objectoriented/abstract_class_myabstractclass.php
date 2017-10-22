<?php 

    abstract class MyAbstractClass {
        
        // Abstract class should not have a body.
        // The sample on TutorialsPoint is incorrect. 
        abstract function myAbstractFunction();
        abstract function myAnotherAbstractionFunction();
        function doNotCallThisFunction () {
            // Not abstract. Not required.
        }
    }

?>