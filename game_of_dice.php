<?php
//game of dice

echo"We throw the dice:  <br><br>";
$anonDice1 = mt_rand(1,6);
$anonDice2 = mt_rand(1,6);
$compDice1 = mt_rand(1,6);
$compDice2 = mt_rand(1,6);
echo "It come up for me:  {$anonDice1} and {$anonDice2} <br> at the computer: {$compDice1} oraz {$compDice2}  <br><br>";
$anonSum = ($anonDice1 + $anonDice2);
$compSum = ($compDice1 + $compDice2);

if (($anonDice1 == $anonDice2) && ($compDice1 == $compDice2)){
    echo "We throw again! <br>";
    exit();
}
if (($anonDice1 != $anonDice2) && ($compDice1 != $compDice2)){

    echo "Checking: <br><br> at my place: ". $anonSum ."<br> at the computer: ".$compSum. "<br><br>";
}
if (($anonDice1 == $anonDice2) && ($compDice1 != $compDice2)){

    echo "Checking: <br><br> at my place: ". $anonSum ."<br>  at the computer: ".$compSum. "<br><br>";
}
if (($anonDice1 != $anonDice2) && ($compDice1 == $compDice2)){

    echo "Checking: <br><br> at my place: ". $anonSum ."<br>  at the computer: ".$compSum. "<br><br>";
}
if ($anonSum > $compSum){
  echo("You won!");
}
if ($anonSum < $compSum){
    echo("The computer won!");
  }
if ($anonSum == $compSum){
    echo("There is a tie! We throw again.");
  }
elseif (($anonSum == 12) && ($compSum == 12)){
    echo("It's a tie, game over!!!");
  }
?>