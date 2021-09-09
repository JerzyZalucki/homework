<?php
//the function validates the number

function number_car($number){
$regexp = '/[a-ż][0-9][0-9][0-9][a-ż][a-ż]/ui';
//$regexp = '/^[a-ż][0-9][0-9][0-9][a-ż][a-ż]$/ui'; //^$ only reads in between
//$regexp = '/\\w\\w\\w\\w\\w\\w/ui'; // \\w looks for each letter a numeric and underscore
$matches = array();
if (preg_match($regexp, $number, $matches)) {
    echo"number car is {$matches[0]}<br>";
    //print_r($matches);
}else {
    echo"enter the correct car number\n";
}

return $matches;
}
$result = number_car('j167kkiqw');
print_r ($result);
?>