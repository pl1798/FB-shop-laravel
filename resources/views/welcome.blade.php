<?php

// Tim so lon nhat, lon nhi trong mang so nguyen, khong sap xep, 1 vong lap

$a=[];
$i=0;
$solonnhat=0;
$solonnhi=0;
$a=array(0,1,34,24,23,13);
for($i=0;$i<count($a)-2;$i++){
    if($a[$i] < $a[$i+1]){
        $solonnhat=$a[$i+1];
        $solonnhi=$a[$i];
        if(($solonnhi < $solonnhat) && ($solonnhi < $a[$i-1<0 ? $i : $i-1])) $solonnhi=$a[$i-1<0 ? $i : $i-1];
    }
}
echo "so lon nhat: ". $solonnhat;
echo "so lon nhi:". $solonnhi;
