<?php 
function nCr( $n, $r) 
{ 
    return factorial($n) / (factorial($r) *  
                  factorial($n - $r)); 
} 
function factorial( $n) 
{ 
    $res = 1; 
    for ( $i = 2; $i <= $n; $i++) 
        $res = $res * $i; 
    return $res; 
}  
    $n = 8; 
    $r = 2; 
    echo nCr($n, $r); 
?> 
