<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
 $arr = array(1, 2, 3, 4, 5);
function miniMaxSum($arr) {
    // Write your code here
    $mayor= $arr[0];
    $menor= $arr[0];
    $sumtotal= 0;
    
    foreach ($arr as $key){
        if ($mayor< $key){
            $mayor = $key;            
        }
    }
    foreach ($arr as $key2){
        if ($menor > $key2){
            $menor = $key2;         
        }
    }
    $j= 0;
      
    while ($j<$mayor){
        $sumtotal+=$arr[$j];
        $j++;        
    }
    $sumamax= $sumtotal-$mayor;
    $sumamin= $sumtotal-$menor;
    
    print $sumamax. " " .$sumamin;
    
    
    
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);