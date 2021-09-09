<?php
 /*if (isset($_GET['email']))
 {
     $email = $_GET['email'];
     $wynik = preg_match('/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/', $email);
     
     if ($wynik)
     {
         echo"The entered address is correct! :)";
     }
     else echo "Error: Please enter a valid email address!";
 
 }*/
    //email validation function
    function check_email($email){
     $matches = array();
     $regexp ='/^([a-z|A-Z|0-9]{4,20})@([a-z|A-Z|0-9]{2,10})\\.(pl|gr|com)$/';
     
     if (preg_match($regexp, $email, $matches))
     {
         echo "The address entered is correct! <br>";
     }
     else echo "Error: please enter a valid email address! <br>";
     return $matches;
    }
    $result = check_email('hfgr@lo.jhfgh');
    print_r ($result);
?>