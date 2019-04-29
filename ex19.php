<?php

echo "Sequência de Fibonacci até o valor ser maior que 500: ";

$t1 = 0;
$t2 = 1;
$t3 = 1;

echo "$t1,$t2,";

while ($t3 <= 500) {
    $t3 = $t1 + $t2;
    #formula da sequencia inicialmente: 
        #  0  1  1
        # t1 t2 t3
    $t1 = $t2; 
    $t2 = $t3; 
    #pulando uma casa:  ->                                              e assim por diante.
    # 0  1  1  2             0  1  1  2  3       0  1  1  2  3  5       0  1  1  2  3  5  8
    #   t1 t2 t3                  t1 t2 t3               t1 t2 t3                  t1 t2 t3


    echo "$t3,";
}

echo "\n";

