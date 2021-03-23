<?php

/*
My friend John and I are members of the "Fat to Fit Club (FFC)". John is worried because each month a list with the weights of members is published and each month he is the last on the list which means he is the heaviest.

I am the one who establishes the list so I told him: "Don't worry any more, I will modify the order of the list". It was decided to attribute a "weight" to numbers. The weight of a number will be from now on the sum of its digits.

For example 99 will have "weight" 18, 100 will have "weight" 1 so in the list 100 will come before 99.

Given a string with the weights of FFC members in normal order can you give this string ordered by "weights" of these numbers?
*/
function Weight($str){
    $sum = 0;
    for($i=0;$i<=strlen($str)-1;$i++){
        $sum+=$str[$i];
    }
    return $sum;
}

function orderWeight($str) {
    $nums = explode(" ", $str);
    for($i=0;$i<count($nums);$i++){
        for($j=$i;$j<count($nums);$j++){
            if(Weight($nums[$i])==Weight($nums[$j])){
                $tab[0]=$nums[$i];
                $tab[1]=$nums[$j];
                sort($tab, SORT_STRING);
                $nums[$i] = $tab[0];
                $nums[$j] = $tab[1];

            }else if(Weight($nums[$i])>Weight($nums[$j])){
                $temp = $nums[$i];
                $nums[$i] = $nums[$j];
                $nums[$j] = $temp;
            }
        }

    }
    return implode(' ', $nums);
  }

  print_r(orderWeight("103 123 4444 99 2000"));
  echo "<br>";
  print_r(orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123"));


  