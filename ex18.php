<?php

$pares = 0;
$impares = 0;

for ($i=1; $i <= 10 ; $i++) { 

    echo "Informe o $i ° número: ";
    $num = (int) fgets(STDIN);

    if (($num % 2) == 0) {
        $pares += 1;
    }

    else {
        $impares += 1;
    }

}

echo "Dos 10 números informados $pares são pares e $impares são impares. ";