<?php 

    class Name {
        var $_firstName;
        var $_lastName;
        
        
        // This is a constructor. A function with the same name as the class.
        function Name($first_name, $last_name) {
            $this -> _firstName = $first_name;
            $this -> _lastName  = $last_name;
        }
        
        function toString() {
            return ($this -> _lastName ." " .$this -> _firstName);
        }
    }
    
    class NameSub1 extends Name {
        var $_middleInitial;
        
        function NameSub1($first_name, $middle_initial, $last_name) {
            Name::Name($first_name, $last_name);
            $this -> _middleInitial = $middle_initial;
        }
        
        function toString() {
            return(Name::toString() . " " . $this -> _middleInitial);
        }
    }
    
    $name = new Name("Chris", "Carrabba");
    print $name->toString();
    
    $name_sub1 = new NameSub1("Chris", "A", "Carrabba");
    print $name_sub1->toString();

?>