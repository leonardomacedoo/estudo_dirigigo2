<?php

echo "Digite o primeiro número: ";
$num1 = (int) fgets(STDIN);

echo "Digite o segundo número: ";
$num2 = (int) fgets(STDIN);

echo "Digite o terceiro número: ";
$num3 = (int) fgets(STDIN);

if ($num1 >= $num2) {
    
    $maior = $num1;
}

else {
    $maior = $num2;
}

if ($maior <= $num3) {
    
    $maior = $num3;
}

echo "O maior número digitado foi: $maior";
