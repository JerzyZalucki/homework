<?php
//word replacement program

$text = 'There was a dog and a cat on the terrace';
$regexp = '/dog|cat/u';
$result = preg_replace($regexp,'$0', $text);//$0 is for the first parentheses
echo $result;
?>