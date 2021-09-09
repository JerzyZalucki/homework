<?php
//The function calculates the number of loan installments to be repaid

function shopping_credit($credit, $percent, $commission){
    $installment = 500;
    $pct = ($percent/100)* $credit;
    $payoff = 0;
    for ($mounth = 1; $mounth <=50; $mounth++) {
        $credit = $credit - ($installment - $pct - $commission);
        $payoff = $payoff + $installment;
        if ($credit <= 100) {
            break;
    }
    }
    return $mounth;
}
$result = shopping_credit(4000, 3, 120);
echo $result;
?>