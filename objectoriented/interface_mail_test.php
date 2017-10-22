<?php 
    
    include 'interface_mail.php';

    class NewMail implements Mail {
        
        public function sendMail(){
            echo "Send Mail";
        }
    
        public function getMail(){
            echo "Get Mail";
        }
    
    }

?>