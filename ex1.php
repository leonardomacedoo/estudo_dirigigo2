<?php

echo "Informe um número: ";
$numero1 = (int) fgets(STDIN);

echo "Informe outro número: ";
$numero2 = (int) fgets(STDIN);

if ($numero1 > $numero2) {
    echo "O maior número é o: $numero1.";
}

else {
    echo "O maior número é o: $numero2 \n";
}


