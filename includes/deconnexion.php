<?php session_start(); ?>
<?php
    function php_deconnexion(){
        session_unset();     // unset $_SESSION variable for the run-time 
        session_destroy();   // destroy session data in storage
    }
    php_deconnexion();
?>
