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


if ($num1 <= $num2) {        
        $menor = $num1;
}

else {
    $menor = $num2;
}

if ($menor >= $num3) {
        $menor = $num3;
}


echo "\nO maior número digitado foi: $maior \n";
echo "O menor número digitado foi: $menor \n";