<?php

// Tim so lon nhat, lon nhi trong mang so nguyen, khong sap xep, 1 vong lap
$a=array(0,1,34,24,23,13);
if($a[0]>$a[1]){
    $solonnhat=$a[0];
    $solonnhi=$a[1];
}elseif($a[0]=$a[1]){
    $solonnhat=$a[1];
    $solonnhi=0;
}else{
    $solonnhat=$a[1];
    $solonnhi=$a[0];
}
for($i=2;$i<count($a);$i++){
    if($solonnhat < $a[$i]){
        $solonnhat=$a[$i];
    }
    if($solonnhi<$a[$i] && $solonnhi==$solonnhat){
        continue;
    }elseif($solonnhi<$a[$i]){
        $solonnhi=$a[$i];
    }
}
echo "so lon nhat: ". $solonnhat;
echo "so lon nhi:". $solonnhi;
