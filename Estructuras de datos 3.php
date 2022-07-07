<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
 //$arr = array(1, 2, 3, 4, 5);
function miniMaxSum($arr) {
    // Write your code here
    $mayor= $arr[0];
    $menor= $arr[0];
    $sumtotal= 0;
    $total= count($arr);
    for ($i=0; $i < $total; $i++){
        if ($arr[$i] > $mayor){
            $mayor = $arr[$i];
        } 
        if ($arr[$i] < $menor){
            $menor = $arr[$i];         
        }
    
        $sumtotal+=$arr[$i];        
    }
   
    $sumamax= $sumtotal-$mayor;
    $sumamin= $sumtotal-$menor;
    
    print $sumamax. " " .$sumamin;      

}
