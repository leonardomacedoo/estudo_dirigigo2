<?php

echo "Informe o preço do primeiro produto: ";
$prod1 = (float) fgets(STDIN);

echo "Informe o preço do segundo produto: ";
$prod2 = (float) fgets(STDIN);

echo "Informe o preço do terceiro produto: ";
$prod3 = (float) fgets(STDIN);

#O produto mais barato deve ser comprado.

if ($prod1 <= $prod2) {
    
    $barato = $prod1;
}

else {
    $barato = $prod2;
}

if ($barato >= $prod3) {
    
    $barato = $prod3;
}

echo "\nO produto que deve ser comprado é o que custa: R$$barato.";