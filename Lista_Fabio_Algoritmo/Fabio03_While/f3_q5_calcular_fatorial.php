<?php
#Leia um número, calcule e escreva seu fatorial.

$num = intval(readline('Calcular fatorial do valor: '));


echo pegarFatorial($num) . "\n";


function pegarFatorial($n){
    if( $n === 0 )return 1;

    $fatorial = 1;
    $i = $n;
    while ($i >= 1) { 
        $fatorial *= $i;
        $i--;
    }
    return $fatorial;
}


?>