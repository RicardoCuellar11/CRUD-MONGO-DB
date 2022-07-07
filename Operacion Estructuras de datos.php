<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
 $positivo= 0;
 $negativo= 0;
 $cero= 0;
 $total = count($arr);
 $n= 6;
 
 for ($i = 0; $i < $total ; $i++){
    if ($arr[$i]>0) {
        $positivo++;}
        elseif ($arr[$i]<0){
           $negativo++;        
    }else{
        $cero++;
        }
   }



$positivo= number_format($positivo/$total, 6, '.', "");
$negativo= number_format($negativo/$total, 6, '.', "");
$cero= number_format($cero/$total, 6, '.', "");

echo ($positivo. "\n". $negativo. "\n". $cero); 
     
}
 
             


$arr2 = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
