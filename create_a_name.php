<?php
//The program creates random animal names

$letters = array(
    'na',   'i',    'la',  'go',
    'са',   'be',   'pа',   'do',
    'li',   'а',    'fu',   'ri',
    'jа',   'mо',   'jа',   'nu'
);
$name = '';
                                 //we make 4 syllables
for ($i = 1; $i <= 4; $i++) {
    $letters2 = array_flip($letters);
    $random = array_rand($letters2);
    echo"a syllable come up: {$random}, <br>";
      $name .= $random;
}
echo "------ <br>";
echo "I suggest a name: {$name} - very nice!\n";
?>