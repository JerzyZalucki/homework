<?php
//phone number validation function
function number_phone($text){
$regexp = '/([0-9]{2})([0-9]{9})/';//here it is 1 and 2
$regexp1 = '/([a-z|A-Z|0-9]{1,20})/'; 
$matches = array();
if (preg_match($regexp, $text, $matches)){
    echo "The correct number format has been entered :) <br>";
    echo "Operator code {$matches[1]} <br> Number phone {$matches[2]}";

}elseif(preg_match($regexp1, $text, $matches)) {
    echo"Enter a valid number in the format   xxxxxxxxxxx :( ";
}
echo"<br>";
return $matches;
}
$result = number_phone("34567890123");
print_r ($result);
?>