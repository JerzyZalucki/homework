
<?php
//The sum of squares function of each number

function square_sum($numbers)
 {
  $result = 0;
  foreach ($numbers as $item) {
    echo $item**2 ." ";
    $result += $item**2;
  }
  echo "<br>";
  return ($result);
}
echo  square_sum ([2,3,4,5,6]);
?>

