<?php

#Leia N, calcule e escreva o valor de S


$N = intval(readline('Valor de N: '));
$S = 0;
echo "\n";
$i=1;
while ( $i <= $N) {
    if( eh_par($i) ){
        $S -= 1 / $i;
        echo "1 / $i\n ";
    }else{
        $S += 1 / ($i);
        echo "1 / $i\n ";
    }

    echo "\n";
    $i++
}

function eh_par($n){
    return $n % 2 === 0;
}


echo "Valor Final de S => $S \n";

