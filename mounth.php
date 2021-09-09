<?php
                                        //Quarter of the year//
    function quarterOf($month) {

      if ($month > 0 && $month <= 3 ){
       return 1;
      }
      elseif ($month > 3 && $month <=6 ){
        return 2;
      }
      elseif($month > 6 && $month <= 9 ){
        return 3;
      }
      elseif($month > 9 && $month <= 12 ){
        return 4;
          }
      else {
          return null;
      }
    }

$wynik = quarterOf(2);
echo $wynik;
?>