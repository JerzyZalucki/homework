<?php
//GA-DE-RY-PO-LU-KI//
$code = array(
    'А'	=>	'G',
    'Ą' =>  'Ą',
    'B'	=>	'B',
    'C'	=>	'C',
    'Ć'	=>	'Ć',
    'D'	=>	'E',
    'E'	=>	'D',
    'Ę'	=>	'Ę',
    'F'	=>	'F',
    'G'	=>	'A',
    'H'	=>	'H',
    'I'	=>	'K',
    'J'	=>	'J',
    'K'	=>	'I',
    'L' =>  'U',
    'Ł' =>  'Ł',
    'M' =>  'M',
    'N' =>  'N',
    'Ń' =>  'Ń',
    'O' =>  'P',
    'Ó' =>  'Ó',
    'P' =>  'O',
    'Q' =>  'Q',
    'R' =>  'Y',
    'S' =>  'S',
    'Ś' =>  'Ś',
    'T' =>  'T',
    'U' =>  'L',
    'V' =>  'V',
    'W' =>  'W',
    'X' =>  'X',
    'Y' =>  'R',
    'Z' =>  'Z',
    'Ż' =>  'Ż',
    'a'	=>	'g',
    'ą' =>  'ą',
    'b'	=>	'b',
    'c'	=>	'c',
    'ć'	=>	'ć',
    'd'	=>	'e',
    'e'	=>	'd',
    'ę'	=>	'ę',
    'f'	=>	'f',
    'g'	=>	'a',
    'h'	=>	'h',
    'i'	=>	'k',
    'j'	=>	'j',
    'k'	=>	'i',
    'l' =>  'u',
    'ł' =>  'ł',
    'm' =>  'm',
    'n' =>  'n',
    'ń' =>  'ń',
    'o' =>  'p',
    'ó' =>  'ó',
    'p' =>  'o',
    'q' =>  'q',
    'r' =>  'y',
    's' =>  's',
    'ś' =>  'ś',
    't' =>  't',
    'u' =>  'l',
    'v' =>  'v',
    'w' =>  'w',
    'x' =>  'x',
    'y' =>  'r',
    'z' =>  'z',
    'ż' =>  'ż'
);
$text = 'I am at mom is an Engineer-Programmer';
$l33t = strtr($text,$code); 
echo "You will say: {$text} <br> and the hackers will say: {$l33t} <br>";
echo "<br>";

echo "And this is decrypting, ha ha! <br>";
foreach($code as $klucz => $szyfr){
    if($klucz !== $text){
        echo $text;
        break;
    }
}
?>
