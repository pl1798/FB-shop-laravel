<?php

// Tim so lon nhat, lon nhi trong mang so nguyen, khong sap xep, 1 vong lap

int $a[];
int $i, $n, $solonnhi;

for(i=0;i<10;i++){
    if($a[i] < $a[i+1]){
        if(($solonnhi < $a[i]) && ($solonnhi < $a[i+1])) $solonnhi=$a[i];
        $n =$a[i+1];
    }
}
print("so lon nhat: ". $n)
print("so lon nhi:". $solonnhi)
