<?php

// Tim so lon nhat, lon nhi trong mang so nguyen, khong sap xep, 1 vong lap

$a=[];
$i=0;
$n=0;
$solonnhi=0;
$a=array(0,1,34,24,23,13);
for($i=0;$i<count($a)-1;$i++){
    if($a[$i] < $a[$i+1]){
        if(($solonnhi < $a[$i]) && ($solonnhi > $a[$i-1])) $solonnhi=$a[$i];
        $n =$a[$i+1];
    }
}
echo "so lon nhat: ". $n;
echo "so lon nhi:". $solonnhi;
