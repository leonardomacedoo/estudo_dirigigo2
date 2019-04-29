<?php

echo "Digite o primeiro número: ";
$num1 = (int) fgets(STDIN);

echo "Digite o segundo número: ";
$num2 = (int) fgets(STDIN);

echo "Digite o terceiro número: ";
$num3 = (int) fgets(STDIN);

$numeros = ["$num1", "$num2", "$num3"];

rsort ($numeros);

print " $numeros[0] \n";
print " $numeros[1] \n";
print " $numeros[2] \n";